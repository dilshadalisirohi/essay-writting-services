<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Repositories\Interfaces\ArticleRepositoryInterface;
use App\Services\GetInputData;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * @var ArticleRepositoryInterface
     */
    protected $articleRepository;

    protected $getData;

    /**
     * @param ArticleRepositoryInterface $articleRepository
     */
    public function __construct(ArticleRepositoryInterface $articleRepository, GetInputData $getData)
    {
        $this->articleRepository = $articleRepository;
        $this->getData = $getData;
    }

    public function index()
    {
        $articles = $this->articleRepository->getArticleList();

        return view('admin.article.list', compact('articles'));
    }

    public function create()
    {
        $relatedArticlesThumbnails = $this->articleRepository->getAllWritingPostsThumbnailWithCheckedFlag();

        return view('admin.article.create', compact('relatedArticlesThumbnails'));
    }

    public function store(ArticleRequest $request)
    {
        $data = $this->getData->getInputDataArticleAndReview($request);
        $this->articleRepository->store($data['input'], $data['faqData'], $data['advantagesData'], $data['disAdvantagesData'], $data['relatedData']);

        return redirect()->route('articles-navigation')->with('message', 'Article been successfully created.');
    }

    public function edit($id)
    {
        $article = $this->articleRepository->find($id);
        $relatedArticlesThumbnails = $this->articleRepository->getAllWritingPostsThumbnailWithCheckedFlag($id);

        return view('admin.article.edit', compact('article', 'relatedArticlesThumbnails'));
    }

    public function update(ArticleRequest $request, $id)
    {
        $data = $this->getData->getInputDataArticleAndReview($request);
        $this->articleRepository->update($id, $data['input'], $data['faqData'], $data['advantagesData'], $data['disAdvantagesData'], $data['relatedData']);

        return redirect()->route('articles-navigation')->with('message', 'Article been successfully updated.');
    }

    public function destroy($id)
    {
        $this->articleRepository->delete($id);

        return redirect()->route('articles-navigation')->with('message', 'Article been successfully deleted.');
    }
}
