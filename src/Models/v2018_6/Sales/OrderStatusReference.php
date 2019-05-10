<?php

namespace Spinen\ConnectWise\Models\v2018_6\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OrderStatusReference Version v2018_6
 * 
 * Model for OrderStatusReference
 *
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\Metadata $_info
 */
class OrderStatusReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Sales\Metadata',
    ];
}