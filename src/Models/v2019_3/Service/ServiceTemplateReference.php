<?php

namespace Spinen\ConnectWise\Models\v2019_3\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceTemplateReference Version v2019_3
 * 
 * Model for ServiceTemplateReference
 *
 * @property integer $id
 * @property string $name
 * @property string $summary
 * @property Spinen\ConnectWise\Models\v2019_3\Service\Metadata $_info
 */
class ServiceTemplateReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'summary' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Service\Metadata',
    ];
}