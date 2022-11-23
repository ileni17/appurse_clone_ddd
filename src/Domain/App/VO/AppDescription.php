<?php

declare(strict_types=1);

namespace App\Domain\App\VO;

use Assert\Assertion;

final class AppDescription
{
    public function __construct(private string $description)
    {
        Assertion::notEmpty($this->description);
    }

    public function __toString(): string
    {
        return $this->description;
    }
}
