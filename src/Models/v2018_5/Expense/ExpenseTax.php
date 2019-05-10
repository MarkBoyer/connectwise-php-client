<?php

namespace Spinen\ConnectWise\Models\v2018_5\Expense;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseTax Version v2018_5
 * 
 * Model for ExpenseTax
 *
 * @property integer $id
 * @property float $amount
 * @property Spinen\ConnectWise\Models\v2018_5\Expense\ExpenseTaxTypeReference $type
 */
class ExpenseTax extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'amount' => 'float',
        'type' => 'Spinen\ConnectWise\Models\v2018_5\Expense\ExpenseTaxTypeReference',
    ];
}