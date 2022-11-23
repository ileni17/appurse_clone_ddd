<?php

declare(strict_types=1);

namespace App\Infrastructure\Driving\Common\v1\ApiResponder;

use App\Domain\App\AppInformation;
use App\Infrastructure\Driving\Common\v1\Model\App\AppInformationReadModel;
use Undabot\SymfonyJsonApi\Http\Service\Responder\AbstractResponder;

final class ResourceResponder extends AbstractResponder
{
    /** {@inheritdoc} */
    protected function getMap(): array
    {
        return [
            AppInformation::class => [AppInformationReadModel::class, 'fromEntity'],
        ];
    }
}
