<?php

namespace StandardsDemo\Cqrs\Tests\Command;


use PHPUnit\Framework\MockObject\Exception;
use PHPUnit\Framework\TestCase;
use RuntimeException;
use StandardsDemo\Cqrs\Command\AddUserCommand;
use StandardsDemo\Cqrs\Command\AddUserHandler;
use StandardsDemo\Cqrs\Model\User;
use StandardsDemo\Cqrs\Model\UserFactory;
use StandardsDemo\Cqrs\Repository\UserRepository;

class AddUserHandlerTest extends TestCase
{
    /**
     * @throws Exception
     */
    public function testHandleAddsUserToRepository(): void
    {
        $username = 'test_user';
        $email = 'test@example.com';
        $mockValues = [
            'getUsername' => $username,
            'getEmail' => $email,
        ];

        $commandMock = $this->createMock(AddUserCommand::class);
        foreach ($mockValues as $mockMethod => $mockValue) {
            $commandMock->expects($this->once())->method($mockMethod)->willReturn($mockValue);
        }

        $userMock = $this->createMock(User::class);
        $userFactoryMock = $this->createMock(UserFactory::class);
        $userFactoryMock->expects($this->once())
            ->method('create')
            ->with($username, $email)
            ->willReturn($userMock);

        $userRepositoryMock = $this->createMock(UserRepository::class);
        $userRepositoryMock->expects($this->once())
            ->method('add')
            ->with($userMock);

        $handler = new AddUserHandler($userRepositoryMock, $userFactoryMock);
        $handler->handle($commandMock);

        self::assertTrue(true);
    }

    /**
     * @throws Exception
     */
    public function testHandleThrowsExceptionWhenUserCreationFails(): void
    {
        $this->expectException(RuntimeException::class);

        $commandMock = $this->createMock(AddUserCommand::class);
        $commandMock->method('getUsername')->willReturn('invalid_user');
        $commandMock->method('getEmail')->willReturn('invalid@example.com');

        $userMock = $this->createMock(User::class);
        $userFactoryMock = $this->createMock(UserFactory::class);
        $userFactoryMock->expects($this->once())
            ->method('create')
            ->willThrowException(new RuntimeException('User creation failed'));

        $userRepositoryMock = $this->createMock(UserRepository::class);

        $handler = new AddUserHandler($userRepositoryMock, $userFactoryMock);
        $handler->handle($commandMock);
    }
}