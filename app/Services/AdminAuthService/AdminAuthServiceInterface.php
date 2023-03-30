<?php

namespace App\Services\AdminAuthService;

interface AdminAuthServiceInterface
{
    public function checkDoesUserAdmin(): bool;
}
