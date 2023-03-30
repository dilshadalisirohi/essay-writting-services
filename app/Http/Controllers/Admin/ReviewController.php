<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReviewRequest;
use App\Repositories\Interfaces\ReviewRepositoryInterface;
use App\Services\GetInputData;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * @var ReviewRepositoryInterface
     */
    protected $reviewRepository;

    protected $getData;

    /**
     * @param $reviewRepository
     */
    public function __construct(ReviewRepositoryInterface $reviewRepository, GetInputData $getData)
    {
        $this->reviewRepository = $reviewRepository;
        $this->getData = $getData;
    }


    public function index(Request $request)
    {
        $searchQuery = $request->input('find') ?: '';
        $reviews = $this->reviewRepository->getReviewList( 40, $searchQuery);

        return view('admin.review.list', compact(['reviews', 'searchQuery']));
    }

    public function create()
    {
        $relatedReviewsThumbnails = $this->reviewRepository->getAllWritingPostsThumbnailWithCheckedFlag();

        return view('admin.review.create', compact('relatedReviewsThumbnails'));
    }

    public function store(ReviewRequest $request)
    {
        $data = $this->getData->getInputDataArticleAndReview($request);
        $this->reviewRepository->store($data['input'], $data['faqData'], $data['advantagesData'], $data['disAdvantagesData'], $data['relatedData']);

        return redirect()->route('post.list')->with('message', 'Review been successfully created.');
    }

    public function edit($id)
    {
        $review = $this->reviewRepository->find($id);
        $relatedReviewsThumbnails = $this->reviewRepository->getAllWritingPostsThumbnailWithCheckedFlag($id);

        return view('admin.review.edit', compact('review', 'relatedReviewsThumbnails'));
    }

    public function update(ReviewRequest $request, $id)
    {
        $data = $this->getData->getInputDataArticleAndReview($request);
        $this->reviewRepository->updateReview($id, $data['input'], $data['faqData'], $data['advantagesData'], $data['disAdvantagesData'], $data['relatedData']);

        return redirect()->route('post.list')->with('message', 'Review been successfully updated.');
    }

    public function destroy($id)
    {
        $this->reviewRepository->delete($id);

        return redirect()->route('post.list')->with('message', 'Review been successfully deleted.');

    }
}
