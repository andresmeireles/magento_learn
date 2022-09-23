<?php

namespace Webjump\Hex\Controller\Json;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\Result\RawFactory;

class Raw implements HttpGetActionInterface
{
    public function __construct(
        private readonly RawFactory $rawFactory
    )
    {
    }

    public function execute()
    {
        return $this->rawFactory->create()->setContents('keek jeej ooo');
    }
}
