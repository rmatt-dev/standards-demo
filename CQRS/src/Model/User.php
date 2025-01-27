<?php

namespace StandardsDemo\Cqrs\Model;

use StandardsDemo\Cqrs\Model\Trait\EmailTrait;
use StandardsDemo\Cqrs\Model\Trait\IdTrait;
use StandardsDemo\Cqrs\Model\Trait\UsernameTrait;

class User
{
    use IdTrait;
    use UsernameTrait;
    use EmailTrait;
}