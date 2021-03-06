<?php

namespace Spinen\ConnectWise\Models\Service;

use Spinen\ConnectWise\Support\Model;

class BoardItemAssociation extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'subTypeAssociationIds' => 'array',
        'addAllSubTypesFlag' => 'boolean',
        'removeAllSubTypesFlag' => 'boolean',
    ];
}
