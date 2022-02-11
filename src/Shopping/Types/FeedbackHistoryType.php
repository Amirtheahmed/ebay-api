<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Thecodebunny\eBayApi\Shopping\Types;

/**
 *
 * @property \Thecodebunny\eBayApi\Shopping\Types\FeedbackPeriodType[] $BidRetractionFeedbackPeriods
 * @property \Thecodebunny\eBayApi\Shopping\Types\FeedbackPeriodType[] $NegativeFeedbackPeriods
 * @property \Thecodebunny\eBayApi\Shopping\Types\FeedbackPeriodType[] $NeutralFeedbackPeriods
 * @property \Thecodebunny\eBayApi\Shopping\Types\FeedbackPeriodType[] $PositiveFeedbackPeriods
 * @property \Thecodebunny\eBayApi\Shopping\Types\FeedbackPeriodType[] $TotalFeedbackPeriods
 * @property integer $UniqueNegativeFeedbackCount
 * @property integer $UniquePositiveFeedbackCount
 * @property \Thecodebunny\eBayApi\Shopping\Types\AverageRatingDetailsType[] $AverageRatingDetails
 * @property integer $NeutralCommentCountFromSuspendedUsers
 * @property integer $UniqueNeutralFeedbackCount
 */
class FeedbackHistoryType extends \Thecodebunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'BidRetractionFeedbackPeriods' => [
            'type' => 'Thecodebunny\eBayApi\Shopping\Types\FeedbackPeriodType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'BidRetractionFeedbackPeriods'
        ],
        'NegativeFeedbackPeriods' => [
            'type' => 'Thecodebunny\eBayApi\Shopping\Types\FeedbackPeriodType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'NegativeFeedbackPeriods'
        ],
        'NeutralFeedbackPeriods' => [
            'type' => 'Thecodebunny\eBayApi\Shopping\Types\FeedbackPeriodType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'NeutralFeedbackPeriods'
        ],
        'PositiveFeedbackPeriods' => [
            'type' => 'Thecodebunny\eBayApi\Shopping\Types\FeedbackPeriodType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'PositiveFeedbackPeriods'
        ],
        'TotalFeedbackPeriods' => [
            'type' => 'Thecodebunny\eBayApi\Shopping\Types\FeedbackPeriodType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'TotalFeedbackPeriods'
        ],
        'UniqueNegativeFeedbackCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UniqueNegativeFeedbackCount'
        ],
        'UniquePositiveFeedbackCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UniquePositiveFeedbackCount'
        ],
        'AverageRatingDetails' => [
            'type' => 'Thecodebunny\eBayApi\Shopping\Types\AverageRatingDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'AverageRatingDetails'
        ],
        'NeutralCommentCountFromSuspendedUsers' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'NeutralCommentCountFromSuspendedUsers'
        ],
        'UniqueNeutralFeedbackCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UniqueNeutralFeedbackCount'
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

        $this->setValues(__CLASS__, $childValues);
    }
}
