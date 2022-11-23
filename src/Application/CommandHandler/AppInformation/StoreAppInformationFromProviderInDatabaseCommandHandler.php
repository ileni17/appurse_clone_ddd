<?php

declare(strict_types=1);

namespace App\Application\CommandHandler\AppInformation;

use App\Application\Client\Http\ScrapedAppInfo\ScraperClient;
use App\Application\Command\AppInformation\StoreAppInformationFromProviderInDatabaseCommand;
use App\Application\Repository\App\AppInformationReadRepository;
use App\Application\Repository\App\AppInformationWriteRepository;
use App\Domain\App\AppInformation;

final class StoreAppInformationFromProviderInDatabaseCommandHandler
{
    public function __construct(
        private ScraperClient $scraperClient,
        private AppInformationReadRepository $appInformationReadRepository,
        private AppInformationWriteRepository $appInformationWriteRepository,
    ) {
    }

    public function __invoke(StoreAppInformationFromProviderInDatabaseCommand $command): void
    {
        $scrapedAppInfo = $this->scraperClient->getAppInfo($command->identificator);
        $this->appInformationWriteRepository->save(new AppInformation(
            $this->appInformationReadRepository->nextId(),
            $command->identificator,
            $scrapedAppInfo->name,
            $scrapedAppInfo->description,
            $scrapedAppInfo->score,
            $scrapedAppInfo->url,
            $scrapedAppInfo->icon,
        ));
    }
}
