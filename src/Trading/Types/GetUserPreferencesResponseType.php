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
 * @property \Thecodebunny\eBayApi\Trading\Types\BidderNoticePreferencesType $BidderNoticePreferences
 * @property \Thecodebunny\eBayApi\Trading\Types\CombinedPaymentPreferencesType $CombinedPaymentPreferences
 * @property \Thecodebunny\eBayApi\Trading\Types\SellerPaymentPreferencesType $SellerPaymentPreferences
 * @property \Thecodebunny\eBayApi\Trading\Types\SellerFavoriteItemPreferencesType $SellerFavoriteItemPreferences
 * @property \Thecodebunny\eBayApi\Trading\Types\EndOfAuctionEmailPreferencesType $EndOfAuctionEmailPreferences
 * @property boolean $EmailShipmentTrackingNumberPreference
 * @property boolean $RequiredShipPhoneNumberPreference
 * @property \Thecodebunny\eBayApi\Trading\Types\UnpaidItemAssistancePreferencesType $UnpaidItemAssistancePreferences
 * @property \Thecodebunny\eBayApi\Trading\Types\SellerExcludeShipToLocationPreferencesType $SellerExcludeShipToLocationPreferences
 * @property \Thecodebunny\eBayApi\Trading\Types\PurchaseReminderEmailPreferencesType $PurchaseReminderEmailPreferences
 * @property \Thecodebunny\eBayApi\Trading\Types\SellerProfilePreferencesType $SellerProfilePreferences
 * @property \Thecodebunny\eBayApi\Trading\Types\SellerReturnPreferencesType $SellerReturnPreferences
 * @property boolean $OfferGlobalShippingProgramPreference
 * @property \Thecodebunny\eBayApi\Trading\Types\DispatchCutoffTimePreferencesType $DispatchCutoffTimePreference
 * @property boolean $GlobalShippingProgramListingPreference
 * @property boolean $OverrideGSPServiceWithIntlServicePreference
 * @property boolean $PickupDropoffSellerPreference
 * @property boolean $OutOfStockControlPreference
 * @property \Thecodebunny\eBayApi\Trading\Types\EBayPLUSPreferenceType[] $eBayPLUSPreference
 */
class GetUserPreferencesResponseType extends \Thecodebunny\eBayApi\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'BidderNoticePreferences' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\BidderNoticePreferencesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BidderNoticePreferences'
        ],
        'CombinedPaymentPreferences' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\CombinedPaymentPreferencesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CombinedPaymentPreferences'
        ],
        'SellerPaymentPreferences' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\SellerPaymentPreferencesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerPaymentPreferences'
        ],
        'SellerFavoriteItemPreferences' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\SellerFavoriteItemPreferencesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerFavoriteItemPreferences'
        ],
        'EndOfAuctionEmailPreferences' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\EndOfAuctionEmailPreferencesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EndOfAuctionEmailPreferences'
        ],
        'EmailShipmentTrackingNumberPreference' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EmailShipmentTrackingNumberPreference'
        ],
        'RequiredShipPhoneNumberPreference' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RequiredShipPhoneNumberPreference'
        ],
        'UnpaidItemAssistancePreferences' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\UnpaidItemAssistancePreferencesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UnpaidItemAssistancePreferences'
        ],
        'SellerExcludeShipToLocationPreferences' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\SellerExcludeShipToLocationPreferencesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerExcludeShipToLocationPreferences'
        ],
        'PurchaseReminderEmailPreferences' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\PurchaseReminderEmailPreferencesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PurchaseReminderEmailPreferences'
        ],
        'SellerProfilePreferences' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\SellerProfilePreferencesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerProfilePreferences'
        ],
        'SellerReturnPreferences' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\SellerReturnPreferencesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerReturnPreferences'
        ],
        'OfferGlobalShippingProgramPreference' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OfferGlobalShippingProgramPreference'
        ],
        'DispatchCutoffTimePreference' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\DispatchCutoffTimePreferencesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DispatchCutoffTimePreference'
        ],
        'GlobalShippingProgramListingPreference' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'GlobalShippingProgramListingPreference'
        ],
        'OverrideGSPServiceWithIntlServicePreference' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OverrideGSPServiceWithIntlServicePreference'
        ],
        'PickupDropoffSellerPreference' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PickupDropoffSellerPreference'
        ],
        'OutOfStockControlPreference' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OutOfStockControlPreference'
        ],
        'eBayPLUSPreference' => [
            'type' => 'Thecodebunny\eBayApi\Trading\Types\EBayPLUSPreferenceType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'eBayPLUSPreference'
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
