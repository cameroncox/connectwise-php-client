<?php

namespace Spinen\ConnectWise\Models\Procurement;

use Spinen\ConnectWise\Support\Model;

class GroupContact extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'groupId' => 'integer',
        'note' => 'string',
        'unsubscribeFlag' => 'boolean',
    ];
}
