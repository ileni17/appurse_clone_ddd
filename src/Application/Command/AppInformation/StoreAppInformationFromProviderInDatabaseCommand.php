<?php

declare(strict_types=1);

namespace App\Application\Command\AppInformation;

use App\Application\Command\Command;
use App\Domain\App\VO\Identificator;

/** @psalm-immutable */
final class StoreAppInformationFromProviderInDatabaseCommand implements Command
{
    public function __construct(
        public Identificator $identificator,
    ) {
    }
}
