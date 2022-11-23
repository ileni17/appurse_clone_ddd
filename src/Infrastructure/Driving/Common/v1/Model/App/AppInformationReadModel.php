<?php

declare(strict_types=1);

namespace App\Infrastructure\Driving\Common\v1\Model\App;

use App\Domain\App\AppInformation;
use Undabot\SymfonyJsonApi\Model\ApiModel;

/**
 * @ResourceType(type="app-information")
 * @psalm-immutable
 */
final class AppInformationReadModel implements ApiModel
{
    public function __construct(
        public string $id,
        /** @Attribute */
        public string $identificator,
        /** @Attribute */
        public string $name,
        /** @Attribute */
        public string $description,
        /** @Attribute */
        public float $score,
        /** @Attribute */
        public string $url,
        /** @Attribute */
        public string $icon,
    ) {
    }

    public static function fromEntity(AppInformation $appInformation): self
    {
        $viewModel = $appInformation->viewModel();

        return new self(
            $viewModel->id,
            $viewModel->identificator,
            $viewModel->name,
            $viewModel->description,
            $viewModel->score,
            $viewModel->url,
            $viewModel->icon,
        );
    }
}
