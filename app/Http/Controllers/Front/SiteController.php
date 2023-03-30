<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\ReviewRepositoryInterface;
use App\Repositories\Interfaces\ArticleRepositoryInterface;

class SiteController extends Controller
{

    /**
     * @var ReviewRepositoryInterface
     */
    protected $reviewRepository;

    /**
     * @var ArticleRepositoryInterface
     */
    protected $articleRepository;

    /**
     * @param ReviewRepositoryInterface $reviewRepository
     * @param ArticleRepositoryInterface $articleRepository
     */
    public function __construct(ReviewRepositoryInterface $reviewRepository, ArticleRepositoryInterface $articleRepository)
    {
        $this->reviewRepository = $reviewRepository;
        $this->articleRepository = $articleRepository;
    }

    public function index()
    {
        $reviews = $this->reviewRepository->all();

        return view('home.index', compact('reviews'));
    }

    public function allReviews()
    {
        $reviews = $this->reviewRepository->all();

        return view('reviews.index', compact('reviews'));
    }

    public function articles()
    {
        $articles = $this->articleRepository->all();

        return view('articles.index', compact('articles'));
    }

    public function singleArticlePage($slug)
    {
        $article = $this->articleRepository->getArticleBySlug($slug);

        return view('articles.single-article.article', compact('article'));
    }

    public function about()
    {
        return view('home.about');
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function termsOfUse()
    {
        return view('home.terms-of-use');
    }

    public function disclaimer()
    {
        return view('home.disclaimer');
    }

    public function singleReviewPage($slug)
    {
        $review = $this->reviewRepository->getReviewBySlug($slug);

        return view('reviews.single-review.review', compact('review'));
    }
}
