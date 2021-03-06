<?php

namespace Spinen\ConnectWise\Models\System;

use Spinen\ConnectWise\Support\Model;

class PortalReport extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'url' => 'string',
        'openSameWindowFlag' => 'boolean',
        'customFlag' => 'boolean',
        'displayFlag' => 'boolean',
    ];
}
