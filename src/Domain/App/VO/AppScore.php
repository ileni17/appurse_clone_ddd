<?php

declare(strict_types=1);

namespace App\Domain\App\VO;

use App\Domain\App\Exception\AppScoreMustBeZeroOrMoreException;
use Assert\Assertion;
use Assert\AssertionFailedException;

final class AppScore
{
    public function __construct(private float $score)
    {
        try {
            Assertion::greaterOrEqualThan($this->score, 0);
        } catch (AssertionFailedException) {
            throw new AppScoreMustBeZeroOrMoreException();
        }
    }

    public function __toString(): string
    {
        return (string) $this->score;
    }
}
