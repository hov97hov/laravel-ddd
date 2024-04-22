<?php

namespace App\Http\Controllers;

use App\Domain\User\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @var UserService
     */
    protected UserService $userService;

    /**
     * @param UserService $userService
     */
    public function __construct(UserService $userService) {
        $this->userService = $userService;
    }

    /**
     * @return void
     */
    public function index(): void
    {
        $this->userService->index();
    }
}
