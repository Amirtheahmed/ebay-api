<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Thecodebunny\eBayApi\PostOrder\Types;

/**
 *
 * @property \Thecodebunny\eBayApi\PostOrder\Types\AppealDetails $appealDetails
 * @property \Thecodebunny\eBayApi\PostOrder\Types\DateTime $creationDate
 * @property \Thecodebunny\eBayApi\PostOrder\Types\DateTime $escalationDate
 * @property \Thecodebunny\eBayApi\PostOrder\Types\DateTime $expirationDate
 * @property \Thecodebunny\eBayApi\PostOrder\Types\DateTime $lastBuyerRespDate
 * @property \Thecodebunny\eBayApi\PostOrder\Types\RefundAmounts $refundAmounts
 * @property \Thecodebunny\eBayApi\PostOrder\Types\DateTime $refundDeadlineDate
 * @property \Thecodebunny\eBayApi\PostOrder\Types\Amount $totalAmount
 */
class InquiryDetails extends \Thecodebunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'appealDetails' => [
            'type' => 'Thecodebunny\eBayApi\PostOrder\Types\AppealDetails',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'appealDetails'
        ],
        'creationDate' => [
            'type' => 'Thecodebunny\eBayApi\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'creationDate'
        ],
        'escalationDate' => [
            'type' => 'Thecodebunny\eBayApi\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'escalationDate'
        ],
        'expirationDate' => [
            'type' => 'Thecodebunny\eBayApi\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'expirationDate'
        ],
        'lastBuyerRespDate' => [
            'type' => 'Thecodebunny\eBayApi\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'lastBuyerRespDate'
        ],
        'refundAmounts' => [
            'type' => 'Thecodebunny\eBayApi\PostOrder\Types\RefundAmounts',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'refundAmounts'
        ],
        'refundDeadlineDate' => [
            'type' => 'Thecodebunny\eBayApi\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'refundDeadlineDate'
        ],
        'totalAmount' => [
            'type' => 'Thecodebunny\eBayApi\PostOrder\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'totalAmount'
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