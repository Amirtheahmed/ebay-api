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
 * @property \Thecodebunny\eBayApi\PostOrder\Types\Amount $actualAmount
 * @property \Thecodebunny\eBayApi\PostOrder\Types\DateTime $creationDate
 * @property string $externalPaymentId
 * @property string $moneyMovementType
 * @property string $paymentProvider
 * @property \Thecodebunny\eBayApi\PostOrder\Types\Amount $requestedAmount
 * @property string $status
 */
class MoneyMovementDetailType extends \Thecodebunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'actualAmount' => [
            'type' => 'Thecodebunny\eBayApi\PostOrder\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'actualAmount'
        ],
        'creationDate' => [
            'type' => 'Thecodebunny\eBayApi\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'creationDate'
        ],
        'externalPaymentId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'externalPaymentId'
        ],
        'moneyMovementType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'moneyMovementType'
        ],
        'paymentProvider' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'paymentProvider'
        ],
        'requestedAmount' => [
            'type' => 'Thecodebunny\eBayApi\PostOrder\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'requestedAmount'
        ],
        'status' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'status'
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