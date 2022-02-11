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
 * @property \Thecodebunny\eBayApi\PostOrder\Types\CaseSummaryType[] $members
 * @property \Thecodebunny\eBayApi\PostOrder\Types\PaginationOutput $paginationOutput
 * @property integer $totalNumberOfCases
 */
class CaseSearchResponse extends \Thecodebunny\eBayApi\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'members' => [
            'type' => 'Thecodebunny\eBayApi\PostOrder\Types\CaseSummaryType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'members'
        ],
        'paginationOutput' => [
            'type' => 'Thecodebunny\eBayApi\PostOrder\Types\PaginationOutput',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'paginationOutput'
        ],
        'totalNumberOfCases' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'totalNumberOfCases'
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