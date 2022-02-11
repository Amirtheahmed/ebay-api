<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Thecodebunny\eBayApi\Inventory\Types;

/**
 *
 * @property string $notes
 * @property \Thecodebunny\eBayApi\Inventory\Types\ProductFamilyProperties $productFamilyProperties
 * @property \Thecodebunny\eBayApi\Inventory\Types\ProductIdentifier $productIdentifier
 */
class CompatibleProduct extends \Thecodebunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'notes' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'notes'
        ],
        'productFamilyProperties' => [
            'type' => 'Thecodebunny\eBayApi\Inventory\Types\ProductFamilyProperties',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'productFamilyProperties'
        ],
        'productIdentifier' => [
            'type' => 'Thecodebunny\eBayApi\Inventory\Types\ProductIdentifier',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'productIdentifier'
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

        $this->setValues(__CLASS__, $childValues);
    }
}
