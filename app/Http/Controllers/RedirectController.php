<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\ReviewRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectController extends Controller
{
    /**
     * @var ReviewRepositoryInterface
     */
    private $reviewRepository;

    public function __construct(ReviewRepositoryInterface $reviewRepository)
    {
        $this->reviewRepository = $reviewRepository;
    }

    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param string $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function __invoke(Request $request, string $slug)
    {
        try {
            $destinationService = $this->reviewRepository->getReviewBySlug($slug);
            $destinationUrl = $destinationService->reff_link;
            return isset($destinationUrl) ? redirect()->away($destinationUrl, Response::HTTP_FOUND, config('redirectHeaders')) : redirect()->back();
        } catch (ModelNotFoundException $exception) {
            abort(Response::HTTP_NOT_FOUND);
        }
    }
}
