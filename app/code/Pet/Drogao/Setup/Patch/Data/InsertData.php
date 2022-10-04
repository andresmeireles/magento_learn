<?php

namespace Pet\Drogao\Setup\Patch\Data;

use Magento\Framework\Setup\Patch\DataPatchInterface;
use Pet\Drogao\Api\Data\PetRepositoryInterface;

class InsertData implements DataPatchInterface
{
    public function __construct(
        private readonly PetRepositoryInterface $petRepository
    ) {
    }

    public static function getDependencies(): array
    {
        return [
//            PetRepositoryInterface::class
        ];
    }

    public function getAliases(): array
    {
        return [];
    }

    public function apply(): void
    {
        $this->petRepository->saveFromArray([
            'pet_name' => 'jose',
            'owner_id' => 1,
            'pet_owner' => 'cubix',
            'created_at' => new \DateTime(),
            'owner_telephone' => '32561106'
        ]);
        $this->petRepository->saveFromArray([
            'pet_name' => 'jose',
            'owner_id' => 1,
            'pet_owner' => 'cubix',
            'created_at' => new \DateTime(),
            'owner_telephone' => '32561106'
        ]);
        $this->petRepository->saveFromArray([
            'pet_name' => 'jose',
            'owner_id' => 1,
            'pet_owner' => 'cubix',
            'created_at' => new \DateTime(),
            'owner_telephone' => '32561106'
        ]);
    }
}
