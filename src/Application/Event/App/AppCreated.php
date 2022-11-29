<?php

declare(strict_types=1);

namespace App\Application\Event\App;

use App\Application\Event\Event;
use App\Domain\App\AppId;

/** @psalm-immutable  */
class AppCreated implements Event
{
    public function __construct(
        public AppId $appId,
    ) {
    }
}
