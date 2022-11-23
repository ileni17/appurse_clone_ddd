<?php

declare(strict_types=1);

namespace App\Domain\Common\Exception;

interface LoggableException
{
    public function getLoggableMessage(): string;
}
