<?php

declare(strict_types=1);

namespace App\Infrastructure\Driving\Common\v1\Model\App;

use App\Domain\App\App;
use Undabot\SymfonyJsonApi\Model\ApiModel;
use Undabot\SymfonyJsonApi\Model\Resource\Annotation\Attribute;
use Undabot\SymfonyJsonApi\Model\Resource\Annotation\ToOne;
use Undabot\SymfonyJsonApi\Service\Resource\Validation\Constraint\ResourceType;

/**
 * @ResourceType(type="apps")
 * @psalm-immutable
 */
final class AppReadModel implements ApiModel
{
    public function __construct(
        public string $id,
        /**
         * @Attribute
         */
        public string $identificator,
        /**
         * @Attribute
         */
        public string $name,
        /**
         * @Attribute
         */
        public string $description,
        /**
         * @Attribute
         */
        public string $score,
        /**
         * @Attribute
         */
        public string $url,
        /**
         * @Attribute
         */
        public string $icon
    ) {
    }

    public static function fromEntity(App $app): self
    {
        return new self(
            (string) $app->id(),
            (string) $app->identificator(),
            (string) $app->name(),
            (string) $app->description(),
            (string) $app->score(),
            (string) $app->url(),
            (string) $app->icon()
        );
    }
}
