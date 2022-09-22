<?php

declare(strict_types=1);

namespace Magic\Product\Plugin;

use Psr\Log\LoggerInterface;

class AddCartPlugin
{
    public function __construct(
        private readonly LoggerInterface $logger
    )
    {
    }

    public function beforeAddProduct($subject, $productInfo, $requestInfo): array
    {
        $requestInfo['qty'] = 10;
        $this->logger->info('some random dude bought 10 t-shirts!');

        return [$productInfo, $requestInfo];
    }
}
