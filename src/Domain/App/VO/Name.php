<?php

declare(strict_types=1);

namespace App\Domain\App\VO;

use Assert\Assertion;

final class Name
{
    public function __construct(private string $name)
    {
        Assertion::minLength($name, 1);
    }

    public function __toString(): string
    {
        return $this->name;
    }
}
