<?php

namespace App\Providers;

use App\Models\Review;
use App\Post;
use App\Repositories\Implementations\ArticleRepository;
use App\Repositories\Implementations\CommentRepository;
use App\Repositories\Implementations\ContactRepository;
use App\Repositories\Implementations\ReviewRepository;
use App\Repositories\Interfaces\ArticleRepositoryInterface;
use App\Repositories\Interfaces\CommentRepositoryInterface;
use App\Repositories\Interfaces\ContactRepositoryInterface;
use App\Repositories\Interfaces\RelatedPostsRepositoryInterface;
use App\Repositories\Interfaces\ReviewRepositoryInterface;
use App\Services\AdminAuthService\AdminAuthService;
use App\Services\AdminAuthService\AdminAuthServiceInterface;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(AdminAuthServiceInterface::class, AdminAuthService::class);
        $this->app->singleton(ReviewRepositoryInterface::class, ReviewRepository::class);
        $this->app->singleton(RelatedPostsRepositoryInterface::class, ReviewRepository::class);
        $this->app->singleton(CommentRepositoryInterface::class, CommentRepository::class);
        $this->app->singleton(ArticleRepositoryInterface::class, ArticleRepository::class);
        $this->app->singleton(ContactRepositoryInterface::class, ContactRepository::class);

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('partials.sidebar-review', function($view) {
            $view->with(['reviews' => Review::where('is_sidebar', 1)->orderBy('id', "ASC")->get()]);
        });

        if(env('APP_ENV') !== 'local') {
            URL::forceScheme('https');
        }
    }
}
