<?php

namespace StandardsDemo\Cqrs\Tests\Query;

use PHPUnit\Framework\TestCase;
use StandardsDemo\Cqrs\Model\User;
use StandardsDemo\Cqrs\Query\GetUser;
use StandardsDemo\Cqrs\Query\GetUserHandler;
use StandardsDemo\Cqrs\Repository\UserRepository;

class GetUserHandlerTest extends TestCase
{
    public function testHandleReturnsAllUsersWhenNoFiltersAreApplied(): void
    {
        $userRepositoryMock = $this->createMock(UserRepository::class);
        $userRepositoryMock->method('getAll')->willReturn([
            (new User())->setEmail('test1@example.com')->setUsername('testuser1'),
            (new User())->setEmail('test2@example.com')->setUsername('testuser2'),
        ]);

        $handler = new GetUserHandler($userRepositoryMock);
        $query = new GetUser();

        $result = $handler->handle($query);

        $this->assertCount(2, $result, 'Should return all users when no filters are applied.');
    }

    public function testHandleFiltersUsersByEmail(): void
    {
        $userRepositoryMock = $this->createMock(UserRepository::class);
        $userRepositoryMock->method('getAll')->willReturn([
            (new User())->setEmail('test1@example.com')->setUsername('testuser1'),
            (new User())->setEmail('test2@example.com')->setUsername('testuser2'),
        ]);

        $handler = new GetUserHandler($userRepositoryMock);
        $query = new GetUser('test1@example.com');

        $result = $handler->handle($query);

        $this->assertCount(1, $result, 'Should return only users with matching email.');
        $this->assertSame('test1@example.com', $result[0]->getEmail(), 'The filtered user should have the correct email.');
    }

    public function testHandleReturnsEmptyArrayWhenNoMatchingUsers(): void
    {
        $userRepositoryMock = $this->createMock(UserRepository::class);
        $userRepositoryMock->method('getAll')->willReturn([
            (new User())->setEmail('test1@example.com')->setUsername('testuser1'),
            (new User())->setEmail('test2@example.com')->setUsername('testuser2'),
        ]);

        $handler = new GetUserHandler($userRepositoryMock);
        $query = new GetUser('nonmatching@example.com');
        $result = $handler->handle($query);

        $this->assertCount(0, $result, 'Should return an empty array when no users match the filter.');
    }

    public function testHandleReturnsFilteredUsersWithPartialEmailMatch(): void
    {
        $userRepositoryMock = $this->createMock(UserRepository::class);
        $userRepositoryMock->method('getAll')->willReturn([
            (new User())->setEmail('test1@example.com')->setUsername('testuser1'),
            (new User())->setEmail('test2@example.com')->setUsername('testuser2'),
            (new User())->setEmail('other@example.com')->setUsername('testuser3'),
        ]);

        $handler = new GetUserHandler($userRepositoryMock);
        $query = new GetUser('test');
        $result = $handler->handle($query);

        $this->assertCount(2, $result, 'Should return users whose email contains the filter string.');
    }
}