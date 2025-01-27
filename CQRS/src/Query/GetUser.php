<?php

namespace StandardsDemo\Cqrs\Query;

class GetUser implements QueryInterface
{
    public function __construct(
        private readonly ?string $email = null
    ) {}

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function hasFilters(): bool
    {
        return $this->email !== null;
    }
}