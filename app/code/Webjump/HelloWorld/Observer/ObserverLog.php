<?php

declare(strict_types=1);

namespace Webjump\HelloWorld\Observer;

use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;
use Magento\Framework\Event\Observer;

class ObserverLog implements ObserverInterface
{
    public function __construct(
        private readonly LoggerInterface $logger
    )
    {
    }

    public function execute(Observer $observer): void
    {
        $this->logger->critical('this is critical, do something, now!' . $observer->getName());
    }
}
