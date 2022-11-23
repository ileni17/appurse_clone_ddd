<?php

declare(strict_types=1);

namespace App\Domain\App\VO;

use Assert\Assertion;

final class Score
{
    public function __construct(private string $score)
    {
        Assertion::float($score);
    }

    public function __toString(): string
    {
        return $this->score;
    }
}
