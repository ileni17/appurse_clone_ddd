<?php

declare(strict_types=1);

namespace App\Domain\App;

/** @psalm-immutable */
final class AppInformationViewModel
{
    public function __construct(
        public string $id,
        public string $identificator,
        public string $name,
        public string $description,
        public float $score,
        public string $url,
        public string $icon,
    ) {
    }
}
