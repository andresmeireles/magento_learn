<?php

declare(strict_types=1);

namespace Pet\Drogao\Api\Data;

use Pet\Drogao\Model\Pet;

interface PetRepositoryInterface
{
    public function getById(int $id): Pet;

    public function getList(): array;

    public function save(Pet $pet): Pet;

    public function saveFromArray(array $pet): Pet;
}
