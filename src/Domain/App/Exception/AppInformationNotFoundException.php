<?php

declare(strict_types=1);

namespace App\Domain\App\Exception;

use App\Domain\Common\Exception\EntityNotFoundException;
use App\Domain\App\AppInformation;

class AppInformationNotFoundException extends EntityNotFoundException
{
    public static function getClassName(): string
    {
        return AppInformation::class;
    }
}
