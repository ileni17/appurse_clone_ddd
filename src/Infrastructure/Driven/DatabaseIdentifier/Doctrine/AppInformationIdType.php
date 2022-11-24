<?php

declare(strict_types=1);

namespace App\Infrastructure\Driven\DatabaseIdentifier\Doctrine;

use App\Domain\App\AppInformationId;
use App\Domain\Common\Id;

final class AppInformationIdType extends IdType
{
    public function getName(): string
    {
        return 'wordInformationId';
    }

    protected function getIdClass(): string
    {
        return AppInformationId::class;
    }

    protected function createIdFromString(string $value): Id
    {
        return AppInformationId::fromString($value);
    }

    protected function isValid(string $value): bool
    {
        return AppInformationId::isValid($value);
    }
}
