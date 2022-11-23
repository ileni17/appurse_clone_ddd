<?php

declare(strict_types=1);

namespace App\Domain\App\VO;

use Assert\Assertion;

final class Identificator
{
    public function __construct(private string $identificator)
    {
        Assertion::minLength($identificator, 1);
    }

    public function __toString(): string
    {
        return $this->identificator;
    }
}
