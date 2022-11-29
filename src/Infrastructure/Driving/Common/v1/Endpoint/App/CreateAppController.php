<?php

declare(strict_types=1);

namespace App\Infrastructure\Driving\Common\v1\Endpoint\App;

use App\Application\Bus\CommandBus;
use App\Application\Command\App\CreateAppCommand;

use App\Application\Repository\App\AppReadRepository;
use App\Domain\App\AppCategoryId;
use App\Domain\App\VO\AppDescription;
use App\Domain\App\VO\AppGooglePlayId;
use App\Domain\App\VO\AppIcon;
use App\Domain\App\VO\AppName;
use App\Domain\App\VO\AppScore;

use App\Domain\App\VO\AppUrl;
use App\Infrastructure\Driving\Common\v1\ApiResponder\ResourceResponder;
use App\Infrastructure\Driving\Common\v1\Model\App\AppWriteModel;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Uid\Ulid;
use Undabot\JsonApi\Definition\Model\Request\CreateResourceRequestInterface;
use Undabot\SymfonyJsonApi\Http\Model\Response\ResourceCreatedResponse;
use Undabot\SymfonyJsonApi\Http\Service\SimpleResourceHandler;

final class CreateAppController
{
    /** @Route("/apps", name="common.v1.app.create", methods={"POST"}) */
    public function create(
        AppReadRepository $appReadRepository,
        ResourceResponder $responder,
        CreateResourceRequestInterface $request,
        SimpleResourceHandler $resourceHandler,
        CommandBus $commandBus,
    ): ResourceCreatedResponse {
        /** @var AppWriteModel $appWriteModel */
        $appWriteModel = $resourceHandler->getModelFromRequest($request, AppWriteModel::class);
        $appId = $appReadRepository->nextId();

        $commandBus->handleCommand(new CreateAppCommand(
            $appId,
            new AppGooglePlayId($appWriteModel->identificator),
            new AppName($appWriteModel->name),
            new AppDescription($appWriteModel->name),
            new AppScore($appWriteModel->score),
            new AppUrl($appWriteModel->url),
            new AppIcon($appWriteModel->icon)
        ));

        return $responder->resourceCreated($appReadRepository->get($appId));
    }
}
