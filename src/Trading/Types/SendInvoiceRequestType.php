<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Thecodebunny\eBayApi\Trading\Types;

/**
 *
 * @property string $ItemID
 * @property string $TransactionID
 * @property string $OrderID
 * @property \Thecodebunny\eBayApi\Trading\Types\InternationalShippingServiceOptionsType[] $InternationalShippingServiceOptions
 * @property \Thecodebunny\eBayApi\Trading\Types\ShippingServiceOptionsType[] $ShippingServiceOptions
 * @property \Thecodebunny\eBayApi\Trading\Types\SalesTaxType $SalesTax
 * @property \Thecodebunny\eBayApi\Trading\Enums\InsuranceOptionCodeType $InsuranceOption
 * @property \Thecodebunny\eBayApi\Trading\Types\AmountType $InsuranceFee
 * @property \Thecodebunny\eBayApi\Trading\Enums\BuyerPaymentMethodCodeType[] $PaymentMethods
 * @property string $PayPalEmailAddress
 * @property string $CheckoutInstructions
 * @property boolean $EmailCopyToSeller
 * @property \Thecodebunny\eBayApi\Trading\Types\AmountType $CODCost
 * @property string $SKU
 * @property string $OrderLineItemID
 * @property \Thecodebunny\eBayApi\Trading\Types\AmountType $AdjustmentAmount
 */
class SendInvoiceRequestType extends \Thecodebunny\eBayApi\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ItemID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemID'
        ],
        'TransactionID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TransactionID'
        ],
        'OrderID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OrderID'
        ],
        'InternationalShippingServiceOptions' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\InternationalShippingServiceOptionsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'InternationalShippingServiceOptions'
        ],
        'ShippingServiceOptions' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\ShippingServiceOptionsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ShippingServiceOptions'
        ],
        'SalesTax' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\SalesTaxType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SalesTax'
        ],
        'InsuranceOption' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InsuranceOption'
        ],
        'InsuranceFee' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InsuranceFee'
        ],
        'PaymentMethods' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'PaymentMethods'
        ],
        'PayPalEmailAddress' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PayPalEmailAddress'
        ],
        'CheckoutInstructions' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CheckoutInstructions'
        ],
        'EmailCopyToSeller' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EmailCopyToSeller'
        ],
        'CODCost' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CODCost'
        ],
        'SKU' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SKU'
        ],
        'OrderLineItemID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OrderLineItemID'
        ],
        'AdjustmentAmount' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AdjustmentAmount'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'SendInvoiceRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}