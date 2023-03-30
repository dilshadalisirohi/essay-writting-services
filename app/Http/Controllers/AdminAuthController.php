<?php

namespace App\Http\Controllers;

use App\Services\AdminAuthService\AdminAuthService;
use Illuminate\Auth\AuthManager;
use Illuminate\Http\Request;
use function redirect;
use function route;
use function view;

class AdminAuthController extends Controller
{
    /**
     * const admin name
     */
    const ADMIN_NAME = 'admin';

    /**
     * @var AdminAuthService
     */
    private $adminAuthService;

    /**
     * @param AdminAuthService $adminAuthService
     */
    public function __construct(AdminAuthService $adminAuthService)
    {
        $this->adminAuthService = $adminAuthService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getAdminLoginForm()
    {
        return view('admin.login');
    }

    /**
     * @param Request $request
     * @param AuthManager $authManager
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request, AuthManager $authManager)
    {
        $incomingPassword = $request->input('password');
        if ($authManager->attempt(['email' => self::ADMIN_NAME, 'password' => $incomingPassword])) {
            return redirect()->intended(route('post.list'));
        }

        return redirect()->route('login');
    }
}
