<?php

declare(strict_types=1);

namespace App\Infrastructure\Driven\DatabaseIdentifier\Doctrine;

use App\Domain\Common\Id;
use App\Domain\App\AppId;

final class AppIdType extends IdType
{
    public function getName(): string
    {
        return 'appId';
    }

    protected function getIdClass(): string
    {
        return AppId::class;
    }

    protected function createIdFromString(string $value): Id
    {
        return AppId::fromString($value);
    }

    protected function isValid(string $value): bool
    {
        return AppId::isValid($value);
    }
}
