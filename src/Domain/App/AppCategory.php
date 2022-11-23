<?php

declare(strict_types=1);

namespace App\Domain\App;

use App\Domain\App\VO\AppGooglePlayCategoryId;
use App\Domain\App\VO\AppCategoryName;

class AppCategory
{
    public function __construct(
        private AppCategoryId $id,
        private AppGooglePlayCategoryId $identificator,
        private AppCategoryName $name,
    ) {
    }

    public function id(): AppCategoryId
    {
        return $this->id;
    }

    public function identificator(): AppGooglePlayCategoryId
    {
        return $this->identificator;
    }

    public function name(): AppCategoryName
    {
        return $this->name;
    }

    public function update(AppCategoryName $name): void
    {
        $this->name = $name;
    }
}
