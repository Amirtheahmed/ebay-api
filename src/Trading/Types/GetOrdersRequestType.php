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
 * @property \Thecodebunny\eBayApi\Trading\Types\OrderIDArrayType $OrderIDArray
 * @property \DateTime $CreateTimeFrom
 * @property \DateTime $CreateTimeTo
 * @property \Thecodebunny\eBayApi\Trading\Enums\TradingRoleCodeType $OrderRole
 * @property \Thecodebunny\eBayApi\Trading\Enums\OrderStatusCodeType $OrderStatus
 * @property \Thecodebunny\eBayApi\Trading\Enums\ListingTypeCodeType $ListingType
 * @property \Thecodebunny\eBayApi\Trading\Types\PaginationType $Pagination
 * @property \DateTime $ModTimeFrom
 * @property \DateTime $ModTimeTo
 * @property integer $NumberOfDays
 * @property boolean $IncludeFinalValueFee
 * @property \Thecodebunny\eBayApi\Trading\Enums\SortOrderCodeType $SortingOrder
 */
class GetOrdersRequestType extends \Thecodebunny\eBayApi\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'OrderIDArray' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\OrderIDArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OrderIDArray'
        ],
        'CreateTimeFrom' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CreateTimeFrom'
        ],
        'CreateTimeTo' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CreateTimeTo'
        ],
        'OrderRole' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OrderRole'
        ],
        'OrderStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OrderStatus'
        ],
        'ListingType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ListingType'
        ],
        'Pagination' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\PaginationType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Pagination'
        ],
        'ModTimeFrom' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ModTimeFrom'
        ],
        'ModTimeTo' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ModTimeTo'
        ],
        'NumberOfDays' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'NumberOfDays'
        ],
        'IncludeFinalValueFee' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'IncludeFinalValueFee'
        ],
        'SortingOrder' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SortingOrder'
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
            self::$requestXmlRootElementNames[__CLASS__] = 'GetOrdersRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
