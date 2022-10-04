<?php

namespace Pet\Drogao\Model;

use Magento\Framework\Model\AbstractModel;
use Pet\Drogao\Model\ResourceModel\PetResource;

class Pet extends AbstractModel
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'pet_table_model';

    /**
     * Initialize magento model.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(PetResource::class);
    }
}
