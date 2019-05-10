<?php

namespace Spinen\ConnectWise\Models\v2018_4\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProductTypeReference Version v2018_4
 * 
 * Model for ProductTypeReference
 *
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\Metadata $_info
 */
class ProductTypeReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\Metadata',
    ];
}