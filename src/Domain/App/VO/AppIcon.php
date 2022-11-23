<?php

declare(strict_types=1);

namespace App\Domain\App\VO;

use Assert\Assertion;

final class AppIcon
{
    public function __construct(private string $icon)
    {
        Assertion::url($icon);
    }

    public function __toString(): string
    {
        return $this->icon;
    }
}
