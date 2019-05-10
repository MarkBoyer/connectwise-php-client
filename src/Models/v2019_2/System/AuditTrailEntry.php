<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AuditTrailEntry Version v2019_2
 * 
 * Model for AuditTrailEntry
 *
 * @property string $text
 * @property string $enteredDate
 * @property string $enteredBy
 * @property string $auditType
 * @property string $auditSubType
 * @property string $auditSource
 */
class AuditTrailEntry extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'text' => 'string',
        'enteredDate' => 'string',
        'enteredBy' => 'string',
        'auditType' => 'string',
        'auditSubType' => 'string',
        'auditSource' => 'string',
    ];
}