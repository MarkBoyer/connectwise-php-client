<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberDeactivationServiceTeam Version v2019_2
 * 
 * Model for MemberDeactivationServiceTeam
 *
 * @property integer $count
 * @property Spinen\ConnectWise\Models\v2019_2\System\MemberReference $reAssignToMember
 */
class MemberDeactivationServiceTeam extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'count' => 'integer',
        'reAssignToMember' => 'Spinen\ConnectWise\Models\v2019_2\System\MemberReference',
    ];
}