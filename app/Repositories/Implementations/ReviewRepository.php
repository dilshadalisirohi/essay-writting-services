<?php

namespace App\Repositories\Implementations;

use App\Models\Review;
use App\Repositories\Interfaces\RelatedPostsRepositoryInterface;
use App\Repositories\Interfaces\ReviewRepositoryInterface;

class ReviewRepository implements ReviewRepositoryInterface, RelatedPostsRepositoryInterface
{
    public function all()
    {
        return Review::all();
    }

    public function getReviewBySlug(string $slug)
    {
        return Review::where('slug', $slug)->firstOrFail();
    }

    public function getReviewList(int $countReviews, string $searchable = '')
    {
        $query = app()->make(Review::class);
        if (!empty($searchable)) {
            $query = $query->where('title', 'like', "%$searchable%");
        }
        $query->orderBy('id', 'desc');
        return $query->paginate($countReviews, ['id', 'slug', 'thumbnail_url', 'title', 'meta_description', 'rate']);
    }

    private function getRelatedPostIds(int $originPostId)
    {
        if ($originPostId === 0) {
            return [];
        }
        $originPost = $this->find($originPostId);

        return $originPost->relatedPosts->pluck('id')->toArray();
    }

    public function getAllWritingPostsThumbnailWithCheckedFlag(int $originPostId = 0)
    {
        $fullPostThumbnailList = Review::get(['id', 'thumbnail_url', 'title']);
        $checkedReviewsIds = $this->getRelatedPostIds($originPostId);
        return $fullPostThumbnailList->map(
            function ($thumbnail) use ($checkedReviewsIds) {
                $thumbnail['checked'] = in_array($thumbnail->id, $checkedReviewsIds) ? true : false;
                return $thumbnail;
            }
        );
    }

    public function store(array $input, array $faqs = [], array $advantages = [], array $disAdvantages = [], array $related = [])
    {
        $post = Review::create($input);
        $post->faqs()->createMany($faqs);
        $post->pros()->createMany($advantages);
        $post->cons()->createMany($disAdvantages);
        $post->relatedPosts()->sync($related);
        return $post;
    }

    public function find(int $id)
    {
        return Review::findOrFail($id);
    }

    public function updateReview(int $id, array $input, array $faqs = [], array $advantages = [], array $disAdvantages = [], array $related = [])
    {
        $review = $this->find($id);
        $review->update($input);
        $review->pros()->delete();
        $review->cons()->delete();
        $review->faqs()->delete();
        $review->pros()->createMany($advantages);
        $review->cons()->createMany($disAdvantages);
        $review->faqs()->createMany($faqs);
        $review->relatedPosts()->sync($related);
        return $review;
    }

    public function delete(int $id)
    {
        return Review::destroy($id);
    }
}
