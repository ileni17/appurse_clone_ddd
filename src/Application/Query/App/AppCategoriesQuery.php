<?php

declare(strict_types=1);

namespace App\Application\Query\App;

use App\Application\Query\PaginatedQuery;

/**
 * @psalm-immutable
 */
final class AppCategoriesQuery extends PaginatedQuery
{
    public function __construct(
        ?int $offset,
        ?int $size,
        public ?string $name,
    ) {
        parent::__construct($offset, $size);
    }
}
