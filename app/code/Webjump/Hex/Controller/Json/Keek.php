<?php

declare(strict_types=1);

namespace Webjump\Hex\Controller\Json;

use Magento\Backend\Model\View\Result\ForwardFactory;
use Magento\Framework\App\Action\HttpGetActionInterface;

class Keek implements HttpGetActionInterface
{
    public function __construct(
        private readonly ForwardFactory $forwardFactory
    )
    {
    }

    public function execute()
    {
        return $this->forwardFactory->create()->setModule('hex')->setController('index')->forward('index');
    }
}
