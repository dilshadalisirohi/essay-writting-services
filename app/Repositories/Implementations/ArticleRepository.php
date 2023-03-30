<?php

namespace App\Repositories\Implementations;

use App\Models\Article;
use App\Repositories\Interfaces\ArticleRepositoryInterface;
use App\Repositories\Interfaces\RelatedPostsRepositoryInterface;

class ArticleRepository implements  ArticleRepositoryInterface, RelatedPostsRepositoryInterface
{
    public function all()
    {
        return Article::all();
    }

    public function find($id)
    {
        return Article::findOrFail($id);
    }

    public function getArticleBySlug($slug)
    {
        return Article::where('slug', $slug)->firstOrFail();
    }

    public function getArticleList()
    {
        return Article::paginate(20);
    }

    private function getRelatedArticlesIds(int $originPostId)
    {
        if ($originPostId === 0) {
            return [];
        }
        $article = $this->find($originPostId);

        return $article->relatedArticles->pluck('id')->toArray();
    }

    public function getAllWritingPostsThumbnailWithCheckedFlag(int $originArticleId = 0)
    {
        $fullArticlesThumbnailList = Article::get(['id', 'thumbnail_url', 'title']);
        $checkedArticlesIds = $this->getRelatedArticlesIds($originArticleId);
        return $fullArticlesThumbnailList->map(
            function ($thumbnail) use ($checkedArticlesIds) {
                $thumbnail['checked'] = in_array($thumbnail->id, $checkedArticlesIds) ? true : false;
                return $thumbnail;
            }
        );
    }

    public function store(array $input, array $faqs = [], array $advantages = [], array $disAdvantages = [], array $related = [])
    {
        $article = Article::create($input);
        $article->faqs()->createMany($faqs);
        $article->pros()->createMany($advantages);
        $article->cons()->createMany($disAdvantages);
        $article->relatedArticles()->sync($related);

        return $article;
    }

    public function update(int $id, array $input, array $faqData = [], array $advantagesData = [], array $disAdvantagesData = [], array $relatedData = [])
    {
        $article = $this->find($id);
        $article->update($input);
        $article->pros()->delete();
        $article->cons()->delete();
        $article->faqs()->delete();
        $article->pros()->createMany($advantagesData);
        $article->cons()->createMany($disAdvantagesData);
        $article->faqs()->createMany($faqData);
        $article->relatedArticles()->sync($relatedData);

        return $article;
    }

    public function delete(int $id)
    {
        return Article::destroy($id);
    }
}
