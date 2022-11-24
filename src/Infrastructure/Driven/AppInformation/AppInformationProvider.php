<?php

declare(strict_types=1);

namespace App\Infrastructure\Driven\AppInformation;

use App\Application\AppInformation\AppInformationFetcher;
use App\Application\Bus\CommandBus;
use App\Application\Repository\App\AppInformationReadRepository;
use App\Domain\App\AppInformation;
use App\Domain\App\VO\Identificator;
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
//        $wordInformation = $this->wordInformationReadRepository->findByWord($word);
//
//        if (null === $wordInformation) {
//            $this->commandBus->handleCommand(new StoreAppInformationFromProviderInDatabaseCommand($word));
//        }
//
//        $wordInformation = $this->wordInformationReadRepository->findByWord($word);
//        if (null === $wordInformation) {
//            throw new NotFoundHttpException();
//        }

        dd('aaa');

        return $wordInformation;
    }
}
