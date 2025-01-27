<?php

namespace StandardsDemo\Cqrs\Model\Trait;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

trait EmailTrait
{
    #[ORM\Column(type: 'string', length: 255, nullable: false)]
    #[Assert\NotBlank(
        message: 'The \'email\' field can not be blank.',
    )]
    protected string $email = '';

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }
}