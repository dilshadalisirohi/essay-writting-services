<?php

namespace App\Services\AdminAuthService;

use App\Http\Controllers\AdminAuthController;
use Illuminate\Auth\AuthManager;

class AdminAuthService implements AdminAuthServiceInterface
{
    private $authManager;

    public function __construct(AuthManager $authManager)
    {
        $this->authManager = $authManager;
    }

    public function checkDoesUserAdmin(): bool
    {
        $user = $this->authManager->user();
        if (isset($user) && $user->name === AdminAuthController::ADMIN_NAME) {
            return true;
        }
        return false;
    }
}
