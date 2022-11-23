<?php

declare(strict_types=1);

namespace App\Infrastructure\Driven\DatabaseIdentifier\Doctrine;

use App\Domain\Common\Id;
use App\Domain\App\AppCategoryId;

final class AppCategoryIdType extends IdType
{
    public function getName(): string
    {
        return 'appCategoryId';
    }

    protected function getIdClass(): string
    {
        return AppCategoryId::class;
    }

    protected function createIdFromString(string $value): Id
    {
        return AppCategoryId::fromString($value);
    }

    protected function isValid(string $value): bool
    {
        return AppCategoryId::isValid($value);
    }
}
