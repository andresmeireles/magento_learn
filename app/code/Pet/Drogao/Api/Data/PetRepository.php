<?php

declare(strict_types=1);

namespace Pet\Drogao\Api\Data;

use Pet\Drogao\Model\Pet;
use Pet\Drogao\Model\ResourceModel\Pet\PetCollection;
use Pet\Drogao\Model\ResourceModel\PetResource;

class PetRepository implements PetRepositoryInterface
{
    public function __construct(
        private readonly PetCollection $petCollection,
        private readonly PetResource $petFactory,
        private readonly Pet $pet,
    )
    {
    }

    public function getById(int $id): Pet
    {
        $pet = $this->petCollection->getItemById($id);
        if ($pet instanceof Pet) {
            return $pet;
        }

        throw new \InvalidArgumentException('Resultado desfavoravel');
    }

    public function getList(): array
    {
        return $this->petCollection->getItems();
    }

    public function save(Pet $pet): Pet
    {
        $this->petFactory->save($pet);

        return $pet;
    }

    public function saveFromArray(array $pet): Pet
    {
        $newPet = $this->pet->setData($pet);

        return $this->save($newPet);
    }
}
