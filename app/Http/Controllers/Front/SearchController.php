<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\SearchReviewService\Contracts\SearchReviewServiceInterface;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * @var SearchReviewServiceInterface
     */
    protected $searchService;

    /**
     * @param SearchReviewServiceInterface $searchService
     */
    public function __construct(SearchReviewServiceInterface $searchService)
    {
        $this->searchService = $searchService;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function search(Request $request)
    {
        $reviews = $this->searchService->search($request->search);

        return view('home.search', compact('reviews'));
    }
}
