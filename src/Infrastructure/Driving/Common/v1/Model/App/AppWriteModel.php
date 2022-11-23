<?php

declare(strict_types=1);

namespace App\Infrastructure\Driving\Common\v1\Model\App;

use App\Infrastructure\Driven\Validator\Constraint as CustomAssert;
use Symfony\Component\Validator\Constraints as Assert;
use Undabot\SymfonyJsonApi\Model\ApiModel;
use Undabot\SymfonyJsonApi\Model\Resource\Annotation\Attribute;
use Undabot\SymfonyJsonApi\Model\Resource\Annotation\ToOne;
use Undabot\SymfonyJsonApi\Service\Resource\Validation\Constraint\ResourceType;

/**
 * @ResourceType(type="apps")
 * @psalm-immutable
 */
final class AppWriteModel implements ApiModel
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
         * @Assert\Type("float")
         */
        public float $score,
        /**
         * @Attribute
         */
        public string $url,
        /**
         * @Attribute
         */
        public string $icon,
        /**
         * @ToOne(name="app_category", type="category")
         */
        public string $category,
    ) {
    }
}
