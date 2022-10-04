<?php

namespace Pet\Drogao\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class PetResource extends AbstractDb
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'pet_table_resource_model';

    /**
     * Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init('pet_table', 'entity_id');
        $this->_useIsObjectNew = true;
    }
}
