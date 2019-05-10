<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceStatusReference Version v2018_5
 * 
 * Model for ServiceStatusReference
 *
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2018_5\System\Metadata $_info
 */
class ServiceStatusReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\System\Metadata',
    ];
}