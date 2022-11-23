<?php

declare(strict_types=1);

namespace App\Domain\App\Exception;

use App\Domain\Common\Exception\EntityNotFoundException;
use App\Domain\Person\Person;

class AppNotFoundException extends EntityNotFoundException
{
    public static function getClassName(): string
    {
        return App::class;
    }
}
