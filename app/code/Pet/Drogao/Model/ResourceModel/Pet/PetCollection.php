<?php

namespace Pet\Drogao\Model\ResourceModel\Pet;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Pet\Drogao\Model\Pet;
use Pet\Drogao\Model\ResourceModel\PetResource;

class PetCollection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'pet_table_collection';

    /**
     * Initialize collection model.
     */
    protected function _construct()
    {
        $this->_init(Pet::class, PetResource::class);
    }
}
