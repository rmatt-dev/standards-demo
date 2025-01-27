<?php

namespace StandardsDemo\Cqrs\Command;

class AddUserCommand
{
    public function __construct(
        private readonly string $email,
        private readonly string $username
    ) {}

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getUsername(): string
    {
        return $this->username;
    }
}