<?php

declare(strict_types=1);

namespace App\Application\CommandHandler\App;

use App\Application\Command\App\CreateAppCommand;
use App\Application\Repository\App\AppWriteRepository;
use App\Domain\App\App;

class CreateAppCommandHandler
{
    public function __construct(
        private AppWriteRepository $appWriteRepository
    ) {
    }

    public function __invoke(CreateAppCommand $command): void
    {
        $app = new App(
            $command->id,
            $command->identificator,
            $command->name,
            $command->description,
            $command->score,
            $command->url,
            $command->icon
        );

        $this->appWriteRepository->save($app);
    }
}
