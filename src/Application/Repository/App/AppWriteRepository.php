<?php

declare(strict_types=1);

namespace App\Application\Repository\App;

use App\Domain\App\App;

interface AppWriteRepository
{
    public function save(App $ad): void;
}
