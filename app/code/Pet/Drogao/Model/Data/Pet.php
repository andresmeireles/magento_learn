<?php

namespace Pet\Drogao\Model\Data;

enum Pet: string
{
    case ENTITY_ID = 'entity_id';
    case PET_NAME = 'pet_name';
    case PET_OWNER = 'pet_owner';
    case OWNER_ID = 'owner_id';
    case OWNER_TELEPHONE = 'owner_telephone';
}
