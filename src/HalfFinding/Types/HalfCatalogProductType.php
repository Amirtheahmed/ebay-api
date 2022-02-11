<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Thecodebunny\eBayApi\HalfFinding\Types;

/**
 *
 * @property string $title
 * @property string $detailsURL
 * @property string $stockPhotoURL
 * @property \Thecodebunny\eBayApi\HalfFinding\Types\ProductIDType[] $productID
 * @property string[] $categoryName
 * @property \Thecodebunny\eBayApi\HalfFinding\Types\NameValueListArrayType $itemSpecifics
 * @property \Thecodebunny\eBayApi\HalfFinding\Types\ItemType[] $item
 * @property \Thecodebunny\eBayApi\HalfFinding\Types\Amount $listPrice
 * @property integer $reviewCount
 * @property \Thecodebunny\eBayApi\HalfFinding\Types\Amount $BestFixedPrice
 * @property \Thecodebunny\eBayApi\HalfFinding\Types\Amount $BestRentalPrice
 */
class HalfCatalogProductType extends \Thecodebunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'title' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'title'
        ],
        'detailsURL' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'detailsURL'
        ],
        'stockPhotoURL' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'stockPhotoURL'
        ],
        'productID' => [
            'type' => 'Thecodebunny\eBayApi\HalfFinding\Types\ProductIDType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'productID'
        ],
        'categoryName' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'categoryName'
        ],
        'itemSpecifics' => [
            'type' => 'Thecodebunny\eBayApi\HalfFinding\Types\NameValueListArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemSpecifics'
        ],
        'item' => [
            'type' => 'Thecodebunny\eBayApi\HalfFinding\Types\ItemType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'item'
        ],
        'listPrice' => [
            'type' => 'Thecodebunny\eBayApi\HalfFinding\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'listPrice'
        ],
        'reviewCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'reviewCount'
        ],
        'BestFixedPrice' => [
            'type' => 'Thecodebunny\eBayApi\HalfFinding\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BestFixedPrice'
        ],
        'BestRentalPrice' => [
            'type' => 'Thecodebunny\eBayApi\HalfFinding\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BestRentalPrice'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/half/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}