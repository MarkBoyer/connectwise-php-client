<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportCustomer Version v2018_4
 * 
 * Model for GLExportCustomer
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\CompanyTypeReference $companyType
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\ContactReference $contact
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\SiteReference $site
 * @property string $accountNumber
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\BillingTermsReference $billingTerms
 * @property string $billingTermsXref
 * @property integer $dueDays
 * @property boolean $taxable
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\TaxCodeReference $taxCode
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\CurrencyReference $currency
 * @property string $stateTaxXref
 * @property string $countyTaxXref
 * @property string $cityTaxXref
 * @property string $countryTaxXref
 * @property string $compositeTaxXref
 * @property float $stateTaxRate
 * @property float $countyTaxRate
 * @property float $cityTaxRate
 * @property float $countryTaxRate
 * @property float $compositeTaxRate
 * @property float $taxGroupRate
 * @property string $taxAgencyXref
 * @property string $stateTaxAgencyXref
 * @property string $countyTaxAgencyXref
 * @property string $cityTaxAgencyXref
 * @property string $countryTaxAgencyXref
 * @property string $compositeTaxAgencyXref
 */
class GLExportCustomer extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'company' => 'Spinen\ConnectWise\Models\v2018_4\Finance\CompanyReference',
        'companyType' => 'Spinen\ConnectWise\Models\v2018_4\Finance\CompanyTypeReference',
        'contact' => 'Spinen\ConnectWise\Models\v2018_4\Finance\ContactReference',
        'site' => 'Spinen\ConnectWise\Models\v2018_4\Finance\SiteReference',
        'accountNumber' => 'string',
        'billingTerms' => 'Spinen\ConnectWise\Models\v2018_4\Finance\BillingTermsReference',
        'billingTermsXref' => 'string',
        'dueDays' => 'integer',
        'taxable' => 'boolean',
        'taxCode' => 'Spinen\ConnectWise\Models\v2018_4\Finance\TaxCodeReference',
        'currency' => 'Spinen\ConnectWise\Models\v2018_4\Finance\CurrencyReference',
        'stateTaxXref' => 'string',
        'countyTaxXref' => 'string',
        'cityTaxXref' => 'string',
        'countryTaxXref' => 'string',
        'compositeTaxXref' => 'string',
        'stateTaxRate' => 'float',
        'countyTaxRate' => 'float',
        'cityTaxRate' => 'float',
        'countryTaxRate' => 'float',
        'compositeTaxRate' => 'float',
        'taxGroupRate' => 'float',
        'taxAgencyXref' => 'string',
        'stateTaxAgencyXref' => 'string',
        'countyTaxAgencyXref' => 'string',
        'cityTaxAgencyXref' => 'string',
        'countryTaxAgencyXref' => 'string',
        'compositeTaxAgencyXref' => 'string',
    ];
}