<?php

namespace Spinen\ConnectWise\Models\System;

use Spinen\ConnectWise\Support\Model;

class CustomReport extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'reportLink' => 'string',
        'name' => 'string',
        'module' => 'string',
        'description' => 'string',
        'generatedFlag' => 'boolean',
        'parameterPrefix' => 'string',
        'parameterSeparator' => 'string',
        'parameterNameSeparator' => 'string',
        'parameterSuffix' => 'string',
        'locationFlag' => 'boolean',
        'locationParamId' => 'integer',
        'locationDefaultFlag' => 'boolean',
        'locationOverride' => 'string',
        'departmentFlag' => 'boolean',
        'departmentParamId' => 'integer',
        'departmentDefaultFlag' => 'boolean',
        'departmentOverride' => 'string',
        'territoryFlag' => 'boolean',
        'territoryParamId' => 'integer',
        'territoryDefaultFlag' => 'boolean',
        'territoryOverride' => 'string',
        'companyFlag' => 'boolean',
        'companyParamId' => 'integer',
        'companyOverride' => 'string',
        'memberFlag' => 'boolean',
        'memberParamId' => 'integer',
        'memberOverride' => 'string',
        'startDateFlag' => 'boolean',
        'startDateParamId' => 'integer',
        'startDateOverride' => 'string',
        'endDateFlag' => 'boolean',
        'endDateParamId' => 'integer',
        'endDateOverride' => 'string',
        'oppTypeFlag' => 'boolean',
        'oppTypeParamId' => 'integer',
        'oppTypeOverride' => 'string',
        'opportunityFlag' => 'boolean',
        'opportunityParamId' => 'integer',
        'opportunityOverride' => 'string',
        'marketingCampaignFlag' => 'boolean',
        'marketingCampaignParamId' => 'integer',
        'marketingCampaignOverride' => 'string',
        'serviceBoardFlag' => 'boolean',
        'serviceBoardParamId' => 'integer',
        'serviceBoardDefaultFlag' => 'boolean',
        'serviceBoardOverride' => 'string',
        'serviceTypeFlag' => 'boolean',
        'serviceTypeParamId' => 'integer',
        'serviceTypeOverride' => 'string',
        'serviceStatusFlag' => 'boolean',
        'serviceStatusParamId' => 'integer',
        'serviceStatusOverride' => 'string',
        'agreementTypeFlag' => 'boolean',
        'agreementTypeParamId' => 'integer',
        'agreementTypeOverride' => 'string',
        'agreementFlag' => 'boolean',
        'agreementParamId' => 'integer',
        'agreementOverride' => 'string',
        'projectTypeFlag' => 'boolean',
        'projectTypeParamId' => 'integer',
        'projectTypeOverride' => 'string',
        'projectFlag' => 'boolean',
        'projectParamId' => 'integer',
        'projectOverride' => 'string',
        'workRoleFlag' => 'boolean',
        'workRoleParamId' => 'integer',
        'workRoleOverride' => 'string',
        'workTypeFlag' => 'boolean',
        'workTypeParamId' => 'integer',
        'workTypeOverride' => 'string',
        'invoiceFlag' => 'boolean',
        'invoiceParamId' => 'integer',
        'invoiceOverride' => 'string',
    ];
}
