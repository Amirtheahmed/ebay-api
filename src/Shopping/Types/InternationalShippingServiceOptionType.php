<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Thecodebunny\eBayApi\Shopping\Types;

/**
 *
 * @property \Thecodebunny\eBayApi\Shopping\Types\AmountType $ShippingInsuranceCost
 * @property string $ShippingServiceName
 * @property \Thecodebunny\eBayApi\Shopping\Types\AmountType $ShippingServiceAdditionalCost
 * @property \Thecodebunny\eBayApi\Shopping\Types\AmountType $ShippingServiceCost
 * @property integer $ShippingServicePriority
 * @property string[] $ShipsTo
 * @property \DateTime $EstimatedDeliveryMinTime
 * @property \DateTime $EstimatedDeliveryMaxTime
 * @property \Thecodebunny\eBayApi\Shopping\Types\AmountType $ImportCharge
 * @property \DateTime $ShippingServiceCutOffTime
 */
class InternationalShippingServiceOptionType extends \Thecodebunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ShippingInsuranceCost' => [
            'type' => 'Thecodebunny\eBayApi\Shopping\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingInsuranceCost'
        ],
        'ShippingServiceName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceName'
        ],
        'ShippingServiceAdditionalCost' => [
            'type' => 'Thecodebunny\eBayApi\Shopping\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceAdditionalCost'
        ],
        'ShippingServiceCost' => [
            'type' => 'Thecodebunny\eBayApi\Shopping\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceCost'
        ],
        'ShippingServicePriority' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingServicePriority'
        ],
        'ShipsTo' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ShipsTo'
        ],
        'EstimatedDeliveryMinTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EstimatedDeliveryMinTime'
        ],
        'EstimatedDeliveryMaxTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EstimatedDeliveryMaxTime'
        ],
        'ImportCharge' => [
            'type' => 'Thecodebunny\eBayApi\Shopping\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ImportCharge'
        ],
        'ShippingServiceCutOffTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceCutOffTime'
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