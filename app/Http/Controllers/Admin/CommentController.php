<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\ArticleRepositoryInterface;
use App\Repositories\Interfaces\CommentRepositoryInterface;
use App\Repositories\Interfaces\ReviewRepositoryInterface;
use App\Services\CaptchaService\Contracts\CaptchaServiceInterface;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class CommentController extends Controller
{
    /**
     * @var CommentRepositoryInterface
     */
    private $commentRepository;

    /**
     * @var ReviewRepositoryInterface
     */
    private $reviewRepository;

    /**
     * @var ArticleRepositoryInterface
     */
    private $articleRepository;

    /**
     * @var CaptchaServiceInterface
     */
    private $captchaService;

    /**
     * @param CommentRepositoryInterface $commentRepository
     * @param ReviewRepositoryInterface $reviewRepository
     * @param ArticleRepositoryInterface $articleRepository
     * @param CaptchaServiceInterface $captchaService
     */
    public function __construct (
        CommentRepositoryInterface $commentRepository,
        ReviewRepositoryInterface $reviewRepository,
        ArticleRepositoryInterface $articleRepository,
        CaptchaServiceInterface $captchaService
    )
    {
        $this->commentRepository = $commentRepository;
        $this->reviewRepository = $reviewRepository;
        $this->articleRepository = $articleRepository;
        $this->captchaService = $captchaService;
    }

    public function index()
    {
        $comments = $this->commentRepository->all();

        return view('admin.comment.index', compact('comments'));
    }

    public function create()
    {
        $reviews = $this->reviewRepository->all();

        return view('admin.comment.create', compact('reviews'));
    }

    public function store(CommentRequest $request, $slug)
    {
        $checkCaptcha = $this->captchaService->checkCaptcha();
        if (!$checkCaptcha) {
            Toastr::error('Check the captcha', 'please');

            return redirect()->back();
        }
        $entity = url()->previous() == route('show.article', $slug).'/' ? $this->articleRepository->getArticleBySlug($slug) : $this->reviewRepository->getReviewBySlug($slug);
        $this->commentRepository->store($request->except('g-recaptcha-response'), $entity);
        if (url()->previous() == route('comment-create')){
            return redirect()->route('comments-navigation')->with('message', 'Comment been successfully added');
        }
        Toastr::success('Your comment has been sent for moderation and will be published later', 'Thank You');

        return redirect()->back();
    }

    public function edit($id)
    {
        $comment = $this->commentRepository->find($id);
        $reviews = $this->reviewRepository->all();

        return view('admin.comment.edit', compact('comment', 'reviews'));
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        $this->commentRepository->update($input, $id);

        return redirect()->route('comments-navigation')->with('message', 'Comment been successfully updated');
    }

    public function delete($id)
    {
        $this->commentRepository->delete($id);

        return redirect()->route('comments-navigation')->with('message', 'Comment been successfully deleted');
    }

    public function approveComment(Comment $comment)
    {
        $comment->status = 1;
        $comment->save();

        return redirect()->back();
    }
}
