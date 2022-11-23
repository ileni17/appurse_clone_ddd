<?php

declare(strict_types=1);

namespace App\Infrastructure\Driven\AppInformation;

use App\Application\Bus\CommandBus;
use App\Application\Command\AppInformation\StoreWordInformationFromProviderInDatabaseCommand;
use App\Application\Repository\App\AppInformationReadRepository;
use App\Application\Repository\Word\WordInformationReadRepository;
use App\Application\WordInformation\WordInformationFetcher;
use App\Domain\App\AppInformation;
use App\Domain\App\VO\Identificator;
use App\Domain\Word\VO\Word;
use App\Domain\Word\WordInformation;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

final class AppInformationProvider implements AppInformationFetcher
{
    public function __construct(
        private AppInformationReadRepository $appInformationReadRepository,
        private CommandBus $commandBus,
    ) {
    }

    public function findByIdentificatorOrFail(Identificator $identificator): AppInformation
    {
        $wordInformation = $this->wordInformationReadRepository->findByWord($word);

        if (null === $wordInformation) {
            $this->commandBus->handleCommand(new StoreWordInformationFromProviderInDatabaseCommand($word));
        }

        $wordInformation = $this->wordInformationReadRepository->findByWord($word);
        if (null === $wordInformation) {
            throw new NotFoundHttpException();
        }

        return $wordInformation;
    }
}
