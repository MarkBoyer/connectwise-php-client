<?php

namespace Spinen\ConnectWise\Models\v2019_1\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeAccrualReference Version v2019_1
 * 
 * Model for TimeAccrualReference
 *
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2019_1\Time\Metadata $_info
 */
class TimeAccrualReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Time\Metadata',
    ];
}