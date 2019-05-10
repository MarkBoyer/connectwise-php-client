<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class EndpointResponse Version v2019_3
 * 
 * Model for EndpointResponse
 *
 * @property string $id
 * @property integer $code
 * @property string $message
 * @property integer $sort
 */
class EndpointResponse extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'string',
        'code' => 'integer',
        'message' => 'string',
        'sort' => 'integer',
    ];
}