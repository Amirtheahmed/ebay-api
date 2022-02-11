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
 * @property \Thecodebunny\eBayApi\Trading\Types\MyMessagesMessageIDArrayType $MessageIDs
 * @property integer $FolderID
 * @property \DateTime $StartTime
 * @property \DateTime $EndTime
 * @property \Thecodebunny\eBayApi\Trading\Types\MyMessagesExternalMessageIDArrayType $ExternalMessageIDs
 * @property \Thecodebunny\eBayApi\Trading\Types\PaginationType $Pagination
 * @property boolean $IncludeHighPriorityMessageOnly
 */
class GetMyMessagesRequestType extends \Thecodebunny\eBayApi\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'MessageIDs' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\MyMessagesMessageIDArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MessageIDs'
        ],
        'FolderID' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FolderID'
        ],
        'StartTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'StartTime'
        ],
        'EndTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EndTime'
        ],
        'ExternalMessageIDs' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\MyMessagesExternalMessageIDArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ExternalMessageIDs'
        ],
        'Pagination' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\PaginationType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Pagination'
        ],
        'IncludeHighPriorityMessageOnly' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'IncludeHighPriorityMessageOnly'
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
            self::$requestXmlRootElementNames[__CLASS__] = 'GetMyMessagesRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
