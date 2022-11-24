<?php

declare(strict_types=1);

namespace App\Infrastructure\Driven\Bus;

use App\Application\Bus\CommandBus;
use App\Application\Command\Command;
use Symfony\Component\Messenger\Exception\HandlerFailedException;
use Symfony\Component\Messenger\HandleTrait;
use Symfony\Component\Messenger\MessageBusInterface;

final class MessengerCommandBus implements CommandBus
{
    use HandleTrait;

    public function __construct(MessageBusInterface $commandBus)
    {
        $this->messageBus = $commandBus;
    }

    /** @throws \Throwable */
    public function handleCommand(Command $command): void
    {
        try {
            $this->handle($command);
        } catch (HandlerFailedException $ex) {
            throw $ex->getNestedExceptions()[0];
        }
    }
}
