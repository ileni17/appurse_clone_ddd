<?php

declare(strict_types=1);

namespace App\Domain\App\VO;

use Assert\Assertion;

final class Icon
{
    public function __construct(private string $icon)
    {
        Assertion::nullOrString($icon);
    }

    public function __toString(): string
    {
        return $this->icon;
    }
}
