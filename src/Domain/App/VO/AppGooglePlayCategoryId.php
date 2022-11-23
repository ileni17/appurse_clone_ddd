<?php

declare(strict_types=1);

namespace App\Domain\App\VO;

use Assert\Assertion;

final class AppGooglePlayCategoryId
{
    public function __construct(private string $identificator)
    {
        Assertion::notEmpty($this->identificator);
    }

    public function __toString(): string
    {
        return $this->identificator;
    }
}
