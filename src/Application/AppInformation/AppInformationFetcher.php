<?php

declare(strict_types=1);

namespace App\Application\AppInformation;

use App\Domain\App\VO\Identificator;
use App\Domain\App\AppInformation;

interface AppInformationFetcher
{
    public function findByIdentificatorOrFail(Identificator $identificator): AppInformation;
}
