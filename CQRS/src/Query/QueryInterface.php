<?php

namespace StandardsDemo\Cqrs\Query;

interface QueryInterface
{
    public function hasFilters(): bool;
}