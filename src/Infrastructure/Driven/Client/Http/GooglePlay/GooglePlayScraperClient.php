<?php

declare(strict_types=1);

namespace App\Infrastructure\Driven\Client\Http\GooglePlay;

use App\Application\Client\Http\IssueCount\IssueClient;
use App\Application\Client\Http\Model\IssueCount\IssueCount;
use App\Application\Client\Http\Model\Request\Request;
use App\Application\Client\Http\Model\Request\RequestIdentifier;
use App\Application\Client\Http\Model\Request\RequestMethodEnum;
use App\Application\Client\Http\Model\Response\Response;
use App\Application\Client\Http\Model\ScrapedAppInfo\ScrapedAppInfo;
use App\Application\Client\Http\ScrapedAppInfo\ScraperClient;
use App\Domain\App\VO\Identificator;
use App\Domain\Common\VO\UrlPath;
use App\Domain\Word\VO\NegativeResult;
use App\Domain\Word\VO\PositiveResult;
use App\Domain\Word\VO\Word;
use App\Infrastructure\Driven\Client\Http\BaseHttpClient;
use App\Infrastructure\Driven\Client\Http\Github\Model\Request\GithubIssueSearchRequest;
use App\Infrastructure\Driven\Client\Http\Github\Model\Response\GithubIssueSearchHttpApiModel;
use App\Infrastructure\Driven\Client\Http\Model\Response\HttpResponse;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Log\LoggerInterface;
use Ramsey\Uuid\Uuid;

final class GooglePlayScraperClient implements ScraperClient
{
    public function getAppInfo(Identificator $identificator): ScrapedAppInfo
    {
        // Poslati upit uz pomoć nelexa gp scraper library i vratiti ScrapedAppInfoModel
        dd('aaaa');
    }
}
