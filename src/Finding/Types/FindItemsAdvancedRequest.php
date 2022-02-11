<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Thecodebunny\eBayApi\Finding\Types;

/**
 *
 * @property string $keywords
 * @property string[] $categoryId
 * @property \Thecodebunny\eBayApi\Finding\Types\ItemFilter[] $itemFilter
 * @property \Thecodebunny\eBayApi\Finding\Types\AspectFilter[] $aspectFilter
 * @property \Thecodebunny\eBayApi\Finding\Enums\OutputSelectorType[] $outputSelector
 * @property boolean $descriptionSearch
 */
class FindItemsAdvancedRequest extends \Thecodebunny\eBayApi\Finding\Types\BaseFindingServiceRequest
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'keywords' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'keywords'
        ],
        'categoryId' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'categoryId'
        ],
        'itemFilter' => [
            'type' => 'Thecodebunny\eBayApi\Finding\Types\ItemFilter',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'itemFilter'
        ],
        'aspectFilter' => [
            'type' => 'Thecodebunny\eBayApi\Finding\Types\AspectFilter',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'aspectFilter'
        ],
        'outputSelector' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'outputSelector'
        ],
        'descriptionSearch' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'descriptionSearch'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/search/v1/services"';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'findItemsAdvancedRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
