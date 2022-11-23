<?php

declare(strict_types=1);

namespace App\Application\Client\Http\ScrapedAppInfo;

use App\Application\Client\Http\Model\ScrapedAppInfo\ScrapedAppInfo;
use App\Domain\App\VO\Identificator;

interface ScraperClient
{
    public function getAppInfo(Identificator $identificator): ScrapedAppInfo;
}
