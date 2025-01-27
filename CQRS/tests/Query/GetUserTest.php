<?php

namespace StandardsDemo\Cqrs\Tests\Query;

use PHPUnit\Framework\TestCase;
use StandardsDemo\Cqrs\Query\GetUser;

class GetUserTest extends TestCase
{
    public function testGetEmailReturnsCorrectValue(): void
    {
        $email = 'test@example.com';
        $query = new GetUser($email);

        $this->assertSame($email, $query->getEmail(), 'getEmail() should return the email set in the constructor.');
    }

    public function testGetEmailReturnsNullIfNoEmailProvided(): void
    {
        $query = new GetUser();

        $this->assertNull($query->getEmail(), 'getEmail() should return null if no email was provided.');
    }

    public function testHasFiltersReturnsTrueWhenEmailIsProvided(): void
    {
        $email = 'test@example.com';
        $query = new GetUser($email);

        $this->assertTrue($query->hasFilters(), 'hasFilters() should return true when an email is provided.');
    }

    public function testHasFiltersReturnsFalseWhenNoEmailIsProvided(): void
    {
        $query = new GetUser();

        $this->assertFalse($query->hasFilters(), 'hasFilters() should return false when no email is provided.');
    }
}