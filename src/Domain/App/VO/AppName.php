<?php

declare(strict_types=1);

namespace App\Domain\App\VO;

use App\Domain\App\Exception\AppNameMustBeAtLeastTwoCharactersLongException;
use Assert\Assertion;
use Assert\AssertionFailedException;

final class AppName
{
    public function __construct(private string $name)
    {
        try {
            Assertion::minLength($this->name, 2);
        } catch (AssertionFailedException) {
            throw new AppNameMustBeAtLeastTwoCharactersLongException;
        }
    }

    public function __toString(): string
    {
        return $this->name;
    }
}
