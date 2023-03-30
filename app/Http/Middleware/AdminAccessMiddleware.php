<?php

namespace App\Http\Middleware;

use App\Services\AdminAuthService\AdminAuthServiceInterface;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Session\SessionManager;

class AdminAccessMiddleware
{
    /**
     * @var AdminAuthServiceInterface
     */
    private $adminAuthService;

    /**
     * @var SessionManager
     */
    private $sessionManager;

    /**
     * @param AdminAuthServiceInterface $adminAuthService
     * @param SessionManager $sessionManager
     */
    public function __construct(AdminAuthServiceInterface $adminAuthService, SessionManager $sessionManager)
    {
        $this->adminAuthService = $adminAuthService;
        $this->sessionManager = $sessionManager;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($this->adminAuthService->checkDoesUserAdmin()) {

            return $next($request);
        }
        $this->sessionManager->put('url.intended', $request->url());

        return redirect()->route('login');
    }
}
