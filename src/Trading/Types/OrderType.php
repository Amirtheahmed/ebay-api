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
 * @property string $OrderID
 * @property \Thecodebunny\eBayApi\Trading\Enums\OrderStatusCodeType $OrderStatus
 * @property \Thecodebunny\eBayApi\Trading\Types\AmountType $AdjustmentAmount
 * @property \Thecodebunny\eBayApi\Trading\Types\AmountType $AmountPaid
 * @property \Thecodebunny\eBayApi\Trading\Types\AmountType $AmountSaved
 * @property \Thecodebunny\eBayApi\Trading\Types\CheckoutStatusType $CheckoutStatus
 * @property \Thecodebunny\eBayApi\Trading\Types\ShippingDetailsType $ShippingDetails
 * @property \Thecodebunny\eBayApi\Trading\Enums\TradingRoleCodeType $CreatingUserRole
 * @property \DateTime $CreatedTime
 * @property \Thecodebunny\eBayApi\Trading\Enums\BuyerPaymentMethodCodeType[] $PaymentMethods
 * @property string $SellerEmail
 * @property \Thecodebunny\eBayApi\Trading\Types\AddressType $ShippingAddress
 * @property \Thecodebunny\eBayApi\Trading\Types\ShippingServiceOptionsType $ShippingServiceSelected
 * @property \Thecodebunny\eBayApi\Trading\Types\AmountType $Subtotal
 * @property \Thecodebunny\eBayApi\Trading\Types\AmountType $Total
 * @property \Thecodebunny\eBayApi\Trading\Types\ExternalTransactionType[] $ExternalTransaction
 * @property \Thecodebunny\eBayApi\Trading\Types\TransactionArrayType $TransactionArray
 * @property string $BuyerUserID
 * @property \DateTime $PaidTime
 * @property \DateTime $ShippedTime
 * @property boolean $IntegratedMerchantCreditCardEnabled
 * @property string $BuyerCheckoutMessage
 * @property string $EIASToken
 * @property \Thecodebunny\eBayApi\Trading\Enums\PaymentHoldStatusCodeType $PaymentHoldStatus
 * @property \Thecodebunny\eBayApi\Trading\Types\PaymentHoldDetailType $PaymentHoldDetails
 * @property \Thecodebunny\eBayApi\Trading\Types\AmountType $RefundAmount
 * @property string $RefundStatus
 * @property boolean $IsMultiLegShipping
 * @property \Thecodebunny\eBayApi\Trading\Types\MultiLegShippingDetailsType $MultiLegShippingDetails
 * @property \Thecodebunny\eBayApi\Trading\Types\PaymentsInformationType $MonetaryDetails
 * @property \Thecodebunny\eBayApi\Trading\Types\PickupDetailsType $PickupDetails
 * @property \Thecodebunny\eBayApi\Trading\Types\PickupMethodSelectedType $PickupMethodSelected
 * @property string $SellerUserID
 * @property string $SellerEIASToken
 * @property string $CancelReason
 * @property \Thecodebunny\eBayApi\Trading\Enums\CancelStatusCodeType $CancelStatus
 * @property string $CancelReasonDetails
 * @property \Thecodebunny\eBayApi\Trading\Types\AmountType $ShippingConvenienceCharge
 * @property \Thecodebunny\eBayApi\Trading\Types\CancelDetailType[] $CancelDetail
 * @property string $LogisticsPlanType
 * @property \Thecodebunny\eBayApi\Trading\Types\TaxIdentifierType[] $BuyerTaxIdentifier
 * @property \Thecodebunny\eBayApi\Trading\Types\BuyerPackageEnclosuresType $BuyerPackageEnclosures
 * @property string $ExtendedOrderID
 * @property boolean $ContainseBayPlusTransaction
 */
class OrderType extends \Thecodebunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'OrderID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OrderID'
        ],
        'OrderStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OrderStatus'
        ],
        'AdjustmentAmount' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AdjustmentAmount'
        ],
        'AmountPaid' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AmountPaid'
        ],
        'AmountSaved' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AmountSaved'
        ],
        'CheckoutStatus' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\CheckoutStatusType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CheckoutStatus'
        ],
        'ShippingDetails' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\ShippingDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingDetails'
        ],
        'CreatingUserRole' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CreatingUserRole'
        ],
        'CreatedTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CreatedTime'
        ],
        'PaymentMethods' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'PaymentMethods'
        ],
        'SellerEmail' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerEmail'
        ],
        'ShippingAddress' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\AddressType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingAddress'
        ],
        'ShippingServiceSelected' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\ShippingServiceOptionsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceSelected'
        ],
        'Subtotal' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Subtotal'
        ],
        'Total' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Total'
        ],
        'ExternalTransaction' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\ExternalTransactionType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ExternalTransaction'
        ],
        'TransactionArray' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\TransactionArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TransactionArray'
        ],
        'BuyerUserID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerUserID'
        ],
        'PaidTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaidTime'
        ],
        'ShippedTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippedTime'
        ],
        'IntegratedMerchantCreditCardEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'IntegratedMerchantCreditCardEnabled'
        ],
        'BuyerCheckoutMessage' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerCheckoutMessage'
        ],
        'EIASToken' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EIASToken'
        ],
        'PaymentHoldStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaymentHoldStatus'
        ],
        'PaymentHoldDetails' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\PaymentHoldDetailType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaymentHoldDetails'
        ],
        'RefundAmount' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RefundAmount'
        ],
        'RefundStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RefundStatus'
        ],
        'IsMultiLegShipping' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'IsMultiLegShipping'
        ],
        'MultiLegShippingDetails' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\MultiLegShippingDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MultiLegShippingDetails'
        ],
        'MonetaryDetails' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\PaymentsInformationType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MonetaryDetails'
        ],
        'PickupDetails' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\PickupDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PickupDetails'
        ],
        'PickupMethodSelected' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\PickupMethodSelectedType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PickupMethodSelected'
        ],
        'SellerUserID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerUserID'
        ],
        'SellerEIASToken' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerEIASToken'
        ],
        'CancelReason' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CancelReason'
        ],
        'CancelStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CancelStatus'
        ],
        'CancelReasonDetails' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CancelReasonDetails'
        ],
        'ShippingConvenienceCharge' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingConvenienceCharge'
        ],
        'CancelDetail' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\CancelDetailType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'CancelDetail'
        ],
        'LogisticsPlanType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LogisticsPlanType'
        ],
        'BuyerTaxIdentifier' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\TaxIdentifierType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'BuyerTaxIdentifier'
        ],
        'BuyerPackageEnclosures' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\BuyerPackageEnclosuresType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerPackageEnclosures'
        ],
        'ExtendedOrderID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ExtendedOrderID'
        ],
        'ContainseBayPlusTransaction' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ContainseBayPlusTransaction'
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

        $this->setValues(__CLASS__, $childValues);
    }
}
