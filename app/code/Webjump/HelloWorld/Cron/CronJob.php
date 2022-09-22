<?php

declare(strict_types=1);

namespace Webjump\HelloWorld\Cron;

use Psr\Log\LoggerInterface;

class CronJob
{
    public function __construct(
        private readonly LoggerInterface $logger
    )
    {
    }

    public function writeOnLog(): void
    {
        $this->logger->critical('te agaro pela cabeça e te jooj');
    }
}
