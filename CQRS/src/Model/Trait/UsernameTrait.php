<?php

namespace StandardsDemo\Cqrs\Model\Trait;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

trait UsernameTrait
{
    #[ORM\Column(type: 'string', length: 255, nullable: false)]
    #[Assert\NotBlank(
        message: 'The \'username\' field can not be blank.',
    )]
    protected string $username = '';

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;
        return $this;
    }
}