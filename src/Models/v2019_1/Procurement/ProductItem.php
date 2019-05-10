<?php

namespace Spinen\ConnectWise\Models\v2019_1\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProductItem Version v2019_1
 * 
 * Model for ProductItem
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\CatalogItemReference $catalogItem
 * @property string $description
 * @property float $sequenceNumber
 * @property float $quantity
 * @property float $price
 * @property float $cost
 * @property float $discount
 * @property string $priceMethod
 * @property string $billableOption
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\AgreementReference $agreement
 * @property integer $locationId
 * @property integer $businessUnitId
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\CompanyReference $vendor
 * @property string $vendorSku
 * @property boolean $taxableFlag
 * @property boolean $dropshipFlag
 * @property boolean $specialOrderFlag
 * @property boolean $phaseProductFlag
 * @property boolean $cancelledFlag
 * @property float $quantityCancelled
 * @property string $cancelledReason
 * @property string $customerDescription
 * @property string $internalNotes
 * @property boolean $productSuppliedFlag
 * @property integer $subContractorShipToId
 * @property float $subContractorAmountLimit
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\ProductRecurring $recurring
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\SLAReference $sla
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\EntityTypeReference $entityType
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\TicketReference $ticket
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\ProjectReference $project
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\SalesOrderReference $salesOrder
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\OpportunityReference $opportunity
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\InvoiceReference $invoice
 * @property integer $warehouseId
 * @property integer $warehouseBinId
 * @property integer $forecastDetailId
 * @property integer $cancelledBy
 * @property Carbon\Carbon $cancelledDate
 * @property string $warehouse
 * @property string $warehouseBin
 * @property Carbon\Carbon $purchaseDate
 * @property string $integrationXRef
 * @property float $listPrice
 * @property array $serialNumberIds
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\OpportunityStatusReference $forecastStatus
 * @property string $productClass
 * @property boolean $needToPurchaseFlag
 * @property integer $needToOrderQuantity
 * @property boolean $minimumStockFlag
 * @property boolean $addComponentsFlag
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\Metadata $_info
 * @property boolean $bypassForecastUpdate
 * @property array $customFields
 */
class ProductItem extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'catalogItem' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\CatalogItemReference',
        'description' => 'string',
        'sequenceNumber' => 'float',
        'quantity' => 'float',
        'price' => 'float',
        'cost' => 'float',
        'discount' => 'float',
        'priceMethod' => 'string',
        'billableOption' => 'string',
        'agreement' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\AgreementReference',
        'locationId' => 'integer',
        'businessUnitId' => 'integer',
        'vendor' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\CompanyReference',
        'vendorSku' => 'string',
        'taxableFlag' => 'boolean',
        'dropshipFlag' => 'boolean',
        'specialOrderFlag' => 'boolean',
        'phaseProductFlag' => 'boolean',
        'cancelledFlag' => 'boolean',
        'quantityCancelled' => 'float',
        'cancelledReason' => 'string',
        'customerDescription' => 'string',
        'internalNotes' => 'string',
        'productSuppliedFlag' => 'boolean',
        'subContractorShipToId' => 'integer',
        'subContractorAmountLimit' => 'float',
        'recurring' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\ProductRecurring',
        'sla' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\SLAReference',
        'entityType' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\EntityTypeReference',
        'ticket' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\TicketReference',
        'project' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\ProjectReference',
        'salesOrder' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\SalesOrderReference',
        'opportunity' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\OpportunityReference',
        'invoice' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\InvoiceReference',
        'warehouseId' => 'integer',
        'warehouseBinId' => 'integer',
        'forecastDetailId' => 'integer',
        'cancelledBy' => 'integer',
        'cancelledDate' => 'Carbon\Carbon',
        'warehouse' => 'string',
        'warehouseBin' => 'string',
        'purchaseDate' => 'Carbon\Carbon',
        'integrationXRef' => 'string',
        'listPrice' => 'float',
        'serialNumberIds' => 'array',
        'company' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\CompanyReference',
        'forecastStatus' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\OpportunityStatusReference',
        'productClass' => 'string',
        'needToPurchaseFlag' => 'boolean',
        'needToOrderQuantity' => 'integer',
        'minimumStockFlag' => 'boolean',
        'addComponentsFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\Metadata',
        'bypassForecastUpdate' => 'boolean',
        'customFields' => 'array',
    ];
}