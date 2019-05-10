<?php

namespace Spinen\ConnectWise\Models\v2018_6\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PriorityReference Version v2018_6
 * 
 * Model for PriorityReference
 *
 * @property integer $id
 * @property string $name
 * @property integer $sort
 * @property Spinen\ConnectWise\Models\v2018_6\Project\Metadata $_info
 */
class PriorityReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'sort' => 'integer',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Project\Metadata',
    ];
}