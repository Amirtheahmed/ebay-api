<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Thecodebunny\eBayApi\ResolutionCaseManagement\Types;

/**
 *
 * @property string $openReason
 * @property string $decisionReason
 * @property \Thecodebunny\eBayApi\ResolutionCaseManagement\Types\DecisionReasonDetailType $decisionReasonDetail
 * @property \DateTime $decisionDate
 * @property \Thecodebunny\eBayApi\ResolutionCaseManagement\Enums\CaseDecisionType $decision
 * @property boolean $FVFCredited
 * @property boolean $notCountedInBuyerProtectionCases
 * @property string $globalId
 * @property \Thecodebunny\eBayApi\ResolutionCaseManagement\Types\AppealType[] $appeal
 * @property \Thecodebunny\eBayApi\ResolutionCaseManagement\Types\EBPCaseResponseHistoryType[] $responseHistory
 * @property \Thecodebunny\eBayApi\ResolutionCaseManagement\Types\Amount $agreedRefundAmount
 * @property \Thecodebunny\eBayApi\ResolutionCaseManagement\Types\PaymentDetailType $paymentDetail
 * @property \Thecodebunny\eBayApi\ResolutionCaseManagement\Types\ShipmentType $buyerReturnShipment
 * @property \Thecodebunny\eBayApi\ResolutionCaseManagement\Types\ShipmentType $sellerShipment
 * @property string $detailStatus
 * @property \Thecodebunny\eBayApi\ResolutionCaseManagement\Types\DetailStatusInfoType $detailStatusInfo
 * @property string $initialBuyerExpectation
 * @property \Thecodebunny\eBayApi\ResolutionCaseManagement\Types\InitialBuyerExpectationDetailType $initialBuyerExpectationDetail
 * @property string $returnMerchandiseAuthorization
 * @property \Thecodebunny\eBayApi\ResolutionCaseManagement\Types\EBPCaseDocumentInfoType[] $caseDocumentInfo
 */
class EBPCaseDetailType extends \Thecodebunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'openReason' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'openReason'
        ],
        'decisionReason' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'decisionReason'
        ],
        'decisionReasonDetail' => [
            'type' => 'Thecodebunny\eBayApi\ResolutionCaseManagement\Types\DecisionReasonDetailType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'decisionReasonDetail'
        ],
        'decisionDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'decisionDate'
        ],
        'decision' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'decision'
        ],
        'FVFCredited' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FVFCredited'
        ],
        'notCountedInBuyerProtectionCases' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'notCountedInBuyerProtectionCases'
        ],
        'globalId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'globalId'
        ],
        'appeal' => [
            'type' => 'Thecodebunny\eBayApi\ResolutionCaseManagement\Types\AppealType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'appeal'
        ],
        'responseHistory' => [
            'type' => 'Thecodebunny\eBayApi\ResolutionCaseManagement\Types\EBPCaseResponseHistoryType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'responseHistory'
        ],
        'agreedRefundAmount' => [
            'type' => 'Thecodebunny\eBayApi\ResolutionCaseManagement\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'agreedRefundAmount'
        ],
        'paymentDetail' => [
            'type' => 'Thecodebunny\eBayApi\ResolutionCaseManagement\Types\PaymentDetailType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'paymentDetail'
        ],
        'buyerReturnShipment' => [
            'type' => 'Thecodebunny\eBayApi\ResolutionCaseManagement\Types\ShipmentType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyerReturnShipment'
        ],
        'sellerShipment' => [
            'type' => 'Thecodebunny\eBayApi\ResolutionCaseManagement\Types\ShipmentType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sellerShipment'
        ],
        'detailStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'detailStatus'
        ],
        'detailStatusInfo' => [
            'type' => 'Thecodebunny\eBayApi\ResolutionCaseManagement\Types\DetailStatusInfoType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'detailStatusInfo'
        ],
        'initialBuyerExpectation' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'initialBuyerExpectation'
        ],
        'initialBuyerExpectationDetail' => [
            'type' => 'Thecodebunny\eBayApi\ResolutionCaseManagement\Types\InitialBuyerExpectationDetailType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'initialBuyerExpectationDetail'
        ],
        'returnMerchandiseAuthorization' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnMerchandiseAuthorization'
        ],
        'caseDocumentInfo' => [
            'type' => 'Thecodebunny\eBayApi\ResolutionCaseManagement\Types\EBPCaseDocumentInfoType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'caseDocumentInfo'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/resolution/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
