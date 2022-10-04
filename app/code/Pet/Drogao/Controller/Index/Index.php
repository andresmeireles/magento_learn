<?php

namespace Pet\Drogao\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Exception\NotFoundException;
use Pet\Drogao\Api\Data\PetRepositoryInterface;
use Pet\Drogao\Model\Data\Pet;

class Index implements HttpGetActionInterface
{
    public function __construct(
        private readonly PetRepositoryInterface $petRepository
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
        dd($this->petRepository->getById(3)->getData(Pet::PET_NAME->value));
    }
}
