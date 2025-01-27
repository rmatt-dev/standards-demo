<?php

namespace StandardsDemo\Cqrs\Command;

use StandardsDemo\Cqrs\Model\UserFactory;
use StandardsDemo\Cqrs\Repository\UserRepository;

class AddUserHandler
{
    public function __construct(
        private readonly UserRepository $userRepository,
        private readonly UserFactory $userFactory,
    ) {}

    public function handle(AddUserCommand $command): void
    {
        $user = $this->userFactory->create($command->getUsername(), $command->getEmail());
        $this->userRepository->add($user);
    }
}