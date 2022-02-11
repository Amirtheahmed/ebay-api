<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Thecodebunny\eBayApi\BulkDataExchange\Types;

/**
 *
 * @property \DateTime $creationTimeFrom
 * @property \DateTime $creationTimeTo
 * @property string[] $jobType
 * @property \Thecodebunny\eBayApi\BulkDataExchange\Enums\JobStatus[] $jobStatus
 */
class GetJobsRequest extends \Thecodebunny\eBayApi\BulkDataExchange\Types\BaseServiceRequest
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'creationTimeFrom' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'creationTimeFrom'
        ],
        'creationTimeTo' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'creationTimeTo'
        ],
        'jobType' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'jobType'
        ],
        'jobStatus' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'jobStatus'
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
            self::$requestXmlRootElementNames[__CLASS__] = 'getJobsRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
