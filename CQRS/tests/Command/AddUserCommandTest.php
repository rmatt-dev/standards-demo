<?php

namespace StandardsDemo\Cqrs\Tests\Command;

use PHPUnit\Framework\TestCase;
use StandardsDemo\Cqrs\Command\AddUserCommand;

class AddUserCommandTest extends TestCase
{
    public function testGetEmailReturnsCorrectValue(): void
    {
        $email = 'test@example.com';
        $username = 'test_user';

        $command = new AddUserCommand($email, $username);

        $this->assertSame($email, $command->getEmail(), 'getEmail() should return the email set in the constructor.');
    }

    public function testGetUsernameReturnsCorrectValue(): void
    {
        $email = 'test@example.com';
        $username = 'test_user';

        $command = new AddUserCommand($email, $username);

        $this->assertSame($username, $command->getUsername(), 'getUsername() should return the username set in the constructor.');
    }
}