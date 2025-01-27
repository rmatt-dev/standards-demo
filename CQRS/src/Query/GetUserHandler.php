<?php

namespace StandardsDemo\Cqrs\Query;

use StandardsDemo\Cqrs\Model\User;
use StandardsDemo\Cqrs\Repository\UserRepository;

class GetUserHandler
{
    public function __construct(
        private readonly UserRepository $userRepository,
    ) {}

    /**
     * @return array|User[]
     */
    public function handle(GetUser $query): array
    {
        $users = $this->userRepository->getAll();

        if (!$query->hasFilters()) {
            return $users;
        }

        return \array_filter($users, function ($user) use ($query) {
            return $query->getEmail() === null || \stripos($user->getEmail(), $query->getEmail()) !== false;
        });
    }
}