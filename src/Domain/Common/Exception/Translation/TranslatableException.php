<?php

declare(strict_types=1);

namespace App\Domain\Common\Exception\Translation;

interface TranslatableException
{
    public function id(): string;
    public function domain(): ?string;
    public function parameters(): array;
    public function locale(): string;
}
