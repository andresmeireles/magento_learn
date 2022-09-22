<?php

declare(strict_types=1);

namespace Webjump\HelloWorld\Plugin;

use Psr\Log\LoggerInterface;

class HttpBeforePlugin
{
    public function __construct(
        protected readonly LoggerInterface $logger
    )
    {
    }

    public function beforeExecute(): void
    {
        $this->logger->info('will login');
    }
}
