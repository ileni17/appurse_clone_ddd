<?php

declare(strict_types=1);

namespace App\Domain\App\VO;

use Assert\Assertion;

final class Description
{
    public function __construct(private string $description)
    {
        Assertion::minLength($description, 1);
    }

    public function __toString(): string
    {
        return $this->description;
    }
}
