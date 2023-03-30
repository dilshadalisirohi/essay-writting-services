<?php

namespace App\Services\SearchReviewService;

use App\Repositories\Interfaces\ReviewRepositoryInterface;
use App\Services\SearchReviewService\Contracts\SearchReviewServiceInterface;

class SearchReviewService implements SearchReviewServiceInterface
{
    protected $reviewRepository;

    public function __construct(ReviewRepositoryInterface $reviewRepository)
    {
        $this->reviewRepository = $reviewRepository;
    }

    public function search(string $name)
    {
        return $this->searchReviewByName($name);
    }

    private function searchReviewByName(string $name)
    {
        return $this->reviewRepository->getReviewList(40, $name);
    }
}
