<?php

namespace StandardsDemo\Cqrs\Model;

class UserFactory
{
    public function create(string $username, string $email): User
    {
        $user = new User();
        $user->setUsername($username);
        $user->setEmail($email);

        return $user;
    }
}