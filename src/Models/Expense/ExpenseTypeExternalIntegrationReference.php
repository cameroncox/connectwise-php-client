<?php

namespace Spinen\ConnectWise\Models\Expense;

use Spinen\ConnectWise\Support\Model;

class ExpenseTypeExternalIntegrationReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string',
    ];
}
