<?php

namespace Spinen\ConnectWise\Models\v2018_4\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ConfigurationTypeQuestionReference Version v2018_4
 * 
 * Model for ConfigurationTypeQuestionReference
 *
 * @property integer $id
 * @property string $question
 * @property Spinen\ConnectWise\Models\v2018_4\Company\Metadata $_info
 */
class ConfigurationTypeQuestionReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'question' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Company\Metadata',
    ];
}