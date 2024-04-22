<?php

namespace App\Domain\User\Services;

use App\Domain\User\Repositories\UserRepository;

class UserService
{
    /**
     * @var UserRepository
     */
    protected UserRepository $userRepository;

    /**
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository) {
        $this->userRepository = $userRepository;
    }

    /**
     * @return void
     */
    public function index(): void
    {
        $this->userRepository->index();
    }
}
