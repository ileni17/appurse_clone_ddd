<?php

declare(strict_types=1);

namespace App\Application\Repository\App;

use App\Domain\App\App;
use App\Domain\App\AppId;
use App\Domain\App\Exception\AppNotFoundException;

interface AppReadRepository
{
    /** @throws AppNotFoundException */
    public function get(AppId $id): App;

    public function nextId(): AppId;
}
