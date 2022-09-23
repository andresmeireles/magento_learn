<?php

namespace Webjump\Hex\Controller\Json;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Exception\NotFoundException;

class Index implements HttpGetActionInterface
{
    public function __construct(
        private readonly JsonFactory $jsonFactory
    )
    {
    }

    /**
     * Execute action based on request and return result
     *
     * @return ResultInterface|ResponseInterface
     * @throws NotFoundException
     */
    public function execute()
    {
        $result = $this->jsonFactory->create();
        $result->setData(['u' => '2']);
        return $result;
    }
}
