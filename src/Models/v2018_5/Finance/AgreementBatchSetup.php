<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementBatchSetup
 *
 * @property integer $id
 * @property carbon $nextRunDate
 * @property integer $daysInAdvance
 */
class AgreementBatchSetup extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nextRunDate' => 'carbon',
        'daysInAdvance' => 'integer',
    ];
}