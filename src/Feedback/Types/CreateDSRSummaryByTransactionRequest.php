<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Thecodebunny\eBayApi\Feedback\Types;

/**
 *
 * @property \Thecodebunny\eBayApi\Feedback\Types\TransactionKey[] $transactionKey
 */
class CreateDSRSummaryByTransactionRequest extends \Thecodebunny\eBayApi\Feedback\Types\BaseServiceRequest
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'transactionKey' => [
            'type' => 'Thecodebunny\eBayApi\Feedback\Types\TransactionKey',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'transactionKey'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/services"';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'createDSRSummaryByTransactionRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
