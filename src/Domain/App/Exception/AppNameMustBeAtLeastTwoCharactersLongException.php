<?php

declare(strict_types=1);

namespace App\Domain\App\Exception;

use App\Domain\Common\Exception\TranslatableException;

final class AppNameMustBeAtLeastTwoCharactersLongException extends TranslatableException
{
    public function __construct()
    {
        parent::__construct('errors.app.app_name_to_short', []);
    }
}
