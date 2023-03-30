<?php

namespace App\Services\SearchReviewService;

use App\Services\SearchReviewService\Contracts\SearchReviewServiceInterface;
use Illuminate\Support\ServiceProvider;

class SearchReviewServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(SearchReviewServiceInterface::class, SearchReviewService::class);
    }
}
