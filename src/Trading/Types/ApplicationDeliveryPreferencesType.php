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
 * @property string $ApplicationURL
 * @property \Thecodebunny\eBayApi\Trading\Enums\EnableCodeType $ApplicationEnable
 * @property string $AlertEmail
 * @property \Thecodebunny\eBayApi\Trading\Enums\EnableCodeType $AlertEnable
 * @property \Thecodebunny\eBayApi\Trading\Enums\DeviceTypeCodeType $DeviceType
 * @property string $PayloadVersion
 * @property \Thecodebunny\eBayApi\Trading\Types\DeliveryURLDetailType[] $DeliveryURLDetails
 */
class ApplicationDeliveryPreferencesType extends \Thecodebunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ApplicationURL' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ApplicationURL'
        ],
        'ApplicationEnable' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ApplicationEnable'
        ],
        'AlertEmail' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AlertEmail'
        ],
        'AlertEnable' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AlertEnable'
        ],
        'DeviceType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DeviceType'
        ],
        'PayloadVersion' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PayloadVersion'
        ],
        'DeliveryURLDetails' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\DeliveryURLDetailType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'DeliveryURLDetails'
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
