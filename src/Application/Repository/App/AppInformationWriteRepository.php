<?php

declare(strict_types=1);

namespace App\Application\Repository\App;

use App\Domain\App\AppInformation;

interface AppInformationWriteRepository
{
    public function save(AppInformation $appInformation): void;
}
