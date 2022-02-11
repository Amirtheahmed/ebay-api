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
 * @property integer $SaleTemplateID
 * @property \DateTime $ScheduleTime
 * @property \Thecodebunny\eBayApi\Trading\Types\ItemType $Item
 */
class AddItemFromSellingManagerTemplateRequestType extends \Thecodebunny\eBayApi\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'SaleTemplateID' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SaleTemplateID'
        ],
        'ScheduleTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ScheduleTime'
        ],
        'Item' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\ItemType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Item'
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
            self::$requestXmlRootElementNames[__CLASS__] = 'AddItemFromSellingManagerTemplateRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
