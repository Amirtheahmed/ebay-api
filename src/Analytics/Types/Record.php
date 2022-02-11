<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Thecodebunny\eBayApi\Analytics\Types;

/**
 *
 * @property \Thecodebunny\eBayApi\Analytics\Types\Value[] $dimensionValues
 * @property \Thecodebunny\eBayApi\Analytics\Types\Value[] $metricValues
 */
class Record extends \Thecodebunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'dimensionValues' => [
            'type' => 'Thecodebunny\eBayApi\Analytics\Types\Value',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'dimensionValues'
        ],
        'metricValues' => [
            'type' => 'Thecodebunny\eBayApi\Analytics\Types\Value',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'metricValues'
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