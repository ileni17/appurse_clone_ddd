<?php

declare(strict_types=1);

namespace App\Infrastructure\Driving\Common\v1\Endpoint\App;

use App\Application\AppInformation\AppInformationFetcher;
use App\Domain\App\VO\Identificator;
use App\Domain\Common\Exception\Http\TooManyRequestsFromIpHttpException;
use App\Infrastructure\Driving\Common\v1\ApiResponder\ResourceResponder;
use Symfony\Component\HttpFoundation\Request as SymfonyRequest;
use Symfony\Component\RateLimiter\RateLimiterFactory;
use Undabot\JsonApi\Definition\Model\Request\GetResourceRequestInterface;
use Undabot\SymfonyJsonApi\Http\Model\Response\ResourceResponse;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

final class GetAppInformationController
{
    /**
     * @Route("/app-information/{identificator}", name="common.v1.app_information.get_by_app_id", methods={"GET"})
     * @ParamConverter("request", options={"id": "identificator"})
     */
    public function getByAppId(
        SymfonyRequest $symfonyHttpRequest,
        Identificator $identificator,
        AppInformationFetcher $appInformationFetcher,
        RateLimiterFactory $githubWordInformationLimiter,
        ResourceResponder $responder,
        GetResourceRequestInterface $request,
    ): ResourceResponse {
        $limiter = $githubWordInformationLimiter->create($symfonyHttpRequest->getClientIp());

        if (false === $limiter->consume(1)->isAccepted()) {
            throw new TooManyRequestsFromIpHttpException(
                [
                    '%ip%' => $symfonyHttpRequest->getClientIp(),
                ],
                $symfonyHttpRequest->getLocale()
            );
        }

        $request->allowIncluded([]);
        $request->allowFields([]);

        return $responder->resource($appInformationFetcher->findByIdentificatorOrFail($identificator));
    }
}
