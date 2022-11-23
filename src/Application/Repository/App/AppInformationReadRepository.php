<?php

declare(strict_types=1);

namespace App\Application\Repository\App;

use App\Domain\App\AppInformation;
use App\Domain\App\AppInformationId;
use App\Domain\App\Exception\AppInformationNotFoundException;
use App\Domain\App\VO\Identificator;

interface AppInformationReadRepository
{
    /** @throws AppInformationNotFoundException */
    public function get(AppInformationId $id): AppInformation;

    public function nextId(): AppInformationId;

    public function findByIdentificator(Identificator $identificator): ?AppInformation;
}
