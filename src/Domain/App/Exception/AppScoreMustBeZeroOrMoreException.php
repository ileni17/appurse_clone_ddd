<?php

declare(strict_types=1);

namespace App\Domain\App\Exception;

use App\Domain\Common\Exception\TranslatableException;

final class AppScoreMustBeZeroOrMoreException extends TranslatableException
{
    public function __construct()
    {
        parent::__construct('errors.app.app_score_must_be_zero_or_positive_integer', []);
    }
}
