<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ApiRequest Version v2019_3
 * 
 * Model for ApiRequest
 *
 * @property integer $Id
 * @property integer $ParentId
 * @property integer $GrandParentId
 * @property Spinen\ConnectWise\Models\v2019_3\System\IRestIdentifiedItem $Entity
 * @property Spinen\ConnectWise\Models\v2019_3\System\FilterValues $Filters
 * @property Spinen\ConnectWise\Models\v2019_3\System\PageValues $Page
 * @property string $Format
 */
class ApiRequest extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'Id' => 'integer',
        'ParentId' => 'integer',
        'GrandParentId' => 'integer',
        'Entity' => 'Spinen\ConnectWise\Models\v2019_3\System\IRestIdentifiedItem',
        'Filters' => 'Spinen\ConnectWise\Models\v2019_3\System\FilterValues',
        'Page' => 'Spinen\ConnectWise\Models\v2019_3\System\PageValues',
        'Format' => 'string',
    ];
}