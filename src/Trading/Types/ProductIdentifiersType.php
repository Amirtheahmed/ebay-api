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
 * @property \Thecodebunny\eBayApi\Trading\Types\GroupValidationRulesType $ValidationRules
 * @property \Thecodebunny\eBayApi\Trading\Types\NameRecommendationType[] $NameRecommendation
 */
class ProductIdentifiersType extends \Thecodebunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ValidationRules' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\GroupValidationRulesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ValidationRules'
        ],
        'NameRecommendation' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\NameRecommendationType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'NameRecommendation'
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