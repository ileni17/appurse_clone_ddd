<?php

namespace App\Infrastructure\Driving\Common\v1\ApiResponder;

use App\Domain\App\App;
use App\Infrastructure\Driving\Common\v1\Model\App\AppReadModel;
use Undabot\SymfonyJsonApi\Http\Service\Responder\AbstractResponder;

final class ResourceResponder extends AbstractResponder
{
    /** {@inheritdoc} */
    protected function getMap(): array
    {
        return [
            App::class => [AppReadModel::class, 'fromEntity'],
        ];
    }
}