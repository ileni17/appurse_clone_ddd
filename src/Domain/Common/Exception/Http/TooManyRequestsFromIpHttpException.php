<?php

declare(strict_types=1);

namespace App\Domain\Common\Exception\Http;

use App\Domain\Common\Exception\Translation\TranslatableException;
use Exception;

final class TooManyRequestsFromIpHttpException extends Exception implements TranslatableException
{
    private const MESSAGE_ID = 'http.too_many_requests_from_ip';
    private const MESSAGE_DOMAIN = 'exceptions';

    /** @var array{ip: string} */
    private array $parameters;
    private string $locale;

    public function __construct(array $parameters, string $locale)
    {
        $this->parameters = $parameters;
        $this->locale = $locale;

        parent::__construct(self::MESSAGE_ID, 429);
    }

    public function id(): string
    {
        return self::MESSAGE_ID;
    }

    public function domain(): ?string
    {
        return self::MESSAGE_DOMAIN;
    }

    public function parameters(): array
    {
        return $this->parameters;
    }

    public function locale(): string
    {
        return $this->locale;
    }
}
