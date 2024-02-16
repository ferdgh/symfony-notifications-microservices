<?php

namespace App\Handler;

use App\Message\StatusUpdate;
use Psr\Log\LoggerInterface;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
class StatusUpdateHandler
{
    public function __construct(
        protected LoggerInterface $logger,
    ) {}

    public function __invoke(StatusUpdate $statusUpdate): void
    {
        $statusDescription = $statusUpdate->getStatus();

        $this->logger->warning('APP1: {STATUS_UPDATE} - '.$statusDescription);
        // Add your business logic here
    }
}