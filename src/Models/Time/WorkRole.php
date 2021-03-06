<?php

namespace Spinen\ConnectWise\Models\Time;

use Spinen\ConnectWise\Support\Model;

class WorkRole extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'hourlyRate' => 'double',
        'integrationXref' => 'string',
        'inactiveFlag' => 'boolean',
        'addAllLocations' => 'boolean',
        'removeAllLocations' => 'boolean',
        'addAllAgreementExclusions' => 'boolean',
        'locationIds' => 'array',
    ];
}
