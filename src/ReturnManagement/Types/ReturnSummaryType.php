<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Thecodebunny\eBayApi\ReturnManagement\Types;

/**
 *
 * @property \Thecodebunny\eBayApi\ReturnManagement\Types\ReturnIdType $ReturnId
 * @property \Thecodebunny\eBayApi\ReturnManagement\Enums\ReturnType $ReturnType
 * @property \Thecodebunny\eBayApi\ReturnManagement\Types\ReturnUserType $otherParty
 * @property \Thecodebunny\eBayApi\ReturnManagement\Types\ReturnRequestType $returnRequest
 * @property \Thecodebunny\eBayApi\ReturnManagement\Enums\ReturnStatusType $status
 * @property \Thecodebunny\eBayApi\ReturnManagement\Types\ReturnResponseDueType $responseDue
 * @property \DateTime $creationDate
 * @property \DateTime $lastModifiedDate
 */
class ReturnSummaryType extends \Thecodebunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ReturnId' => [
            'type' => 'Thecodebunny\eBayApi\ReturnManagement\Types\ReturnIdType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ReturnId'
        ],
        'ReturnType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ReturnType'
        ],
        'otherParty' => [
            'type' => 'Thecodebunny\eBayApi\ReturnManagement\Types\ReturnUserType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'otherParty'
        ],
        'returnRequest' => [
            'type' => 'Thecodebunny\eBayApi\ReturnManagement\Types\ReturnRequestType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnRequest'
        ],
        'status' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'status'
        ],
        'responseDue' => [
            'type' => 'Thecodebunny\eBayApi\ReturnManagement\Types\ReturnResponseDueType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'responseDue'
        ],
        'creationDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'creationDate'
        ],
        'lastModifiedDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'lastModifiedDate'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/returns/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
