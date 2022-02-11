<?php
namespace Thecodebunny\eBayApi\MerchantData;

/**
 * Unlike other services there is no MerchantData service class as all operations
 * are performed via other services.
 *
 * This class is to help client code parse the XML that has been returned via an
 * attachment in a LMS response.
 */
class MerchantData
{
    /**
     * @var \Thecodebunny\eBayApi\Parser\XmlParser
     */
    private $xmlParser;

    public function __construct()
    {
        $this->xmlParser = new \Thecodebunny\eBayApi\Parser\XmlParser('\Thecodebunny\eBayApi\MerchantData\Types\BulkDataExchangeResponsesType');
    }

    /**
     * @param string $xml
     *
     * @return \Thecodebunny\eBayApi\MerchantData\Types\BulkDataExchangeResponsesType
     */
    public function bulkDataExchangeResponses($xml)
    {
        return $this->parseXml($xml);
    }

    /**
     * @param string $xml
     *
     * @return \Thecodebunny\eBayApi\MerchantData\Types\ActiveInventoryReportResponseType
     */
    public function activeInventoryReport($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->ActiveInventoryReport;
    }

    /**
     * @param string $xml
     *
     * @return \Thecodebunny\eBayApi\MerchantData\Types\AddFixedPriceItemResponseType[]
     */
    public function addFixedPriceItem($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->AddFixedPriceItemResponse;
    }

    /**
     * @param string $xml
     *
     * @return \Thecodebunny\eBayApi\MerchantData\Types\AddItemResponseType[]
     */
    public function addItem($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->AddItemResponse;
    }

    /**
     * @param string $xml
     *
     * @return \Thecodebunny\eBayApi\MerchantData\Types\EndFixedPriceItemResponseType[]
     */
    public function endFixedPriceItem($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->EndFixedPriceItemResponse;
    }

    /**
     * @param string $xml
     *
     * @return \Thecodebunny\eBayApi\MerchantData\Types\EndItemResponseType[]
     */
    public function endItem($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->EndItemResponse;
    }

    /**
     * @param string $xml
     *
     * @return \Thecodebunny\eBayApi\MerchantData\Types\FeeSettlementReportResponseType
     */
    public function feeSettlementReport($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->FeeSettlementReport;
    }

    /**
     * @param string $xml
     *
     * @return \Thecodebunny\eBayApi\MerchantData\Types\OrderAckResponseType[]
     */
    public function orderAck($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->OrderAckResponse;
    }

    /**
     * @param string $xml
     *
     * @return \Thecodebunny\eBayApi\MerchantData\Types\RelistFixedPriceItemResponseType[]
     */
    public function relistFixedPriceItem($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->RelistFixedPriceItemResponse;
    }

    /**
     * @param string $xml
     *
     * @return \Thecodebunny\eBayApi\MerchantData\Types\RelistItemResponseType[]
     */
    public function relistItem($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->RelistItemResponse;
    }

    /**
     * @param string $xml
     *
     * @return \Thecodebunny\eBayApi\MerchantData\Types\ReviseFixedPriceItemResponseType[]
     */
    public function reviseFixedPriceItem($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->ReviseFixedPriceItemResponse;
    }

    /**
     * @param string $xml
     *
     * @return \Thecodebunny\eBayApi\MerchantData\Types\ReviseInventoryStatusResponseType[]
     */
    public function reviseInventoryStatus($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->ReviseInventoryStatusResponse;
    }

    /**
     * @param string $xml
     *
     * @return \Thecodebunny\eBayApi\MerchantData\Types\ReviseItemResponseType[]
     */
    public function reviseItem($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->ReviseItemResponse;
    }

    /**
     * @param string $xml
     *
     * @return \Thecodebunny\eBayApi\MerchantData\Types\SetShipmentTrackingInfoResponseType[]
     */
    public function setShipmentTrackingInfo($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->SetShipmentTrackingInfoResponse;
    }

    /**
     * @param string $xml
     *
     * @return \Thecodebunny\eBayApi\MerchantData\Types\SoldReportResponseType
     */
    public function soldReport($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->SoldReport;
    }

    /**
     * @param string $xml
     *
     * @return \Thecodebunny\eBayApi\MerchantData\Types\UploadSiteHostedPicturesResponseType[]
     */
    public function uploadSiteHostedPictures($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->UploadSiteHostedPicturesResponse;
    }

    /**
     * @param string $xml
     *
     * @return \Thecodebunny\eBayApi\MerchantData\Types\VerifyAddFixedPriceItemResponseType[]
     */
    public function verifyAddFixedPriceItem($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->VerifyAddFixedPriceItemResponse;
    }

    /**
     * @param string $xml
     *
     * @return \Thecodebunny\eBayApi\MerchantData\Types\VerifyAddItemResponseType[]
     */
    public function verifyAddItem($xml)
    {
        return $this->bulkDataExchangeResponses($xml)->VerifyAddItemResponse;
    }

    /**
     * @param string $xml
     *
     * @return \Thecodebunny\eBayApi\MerchantData\Types\BulkDataExchangeResponsesType
     */
    private function parseXml($xml)
    {
        return $this->xmlParser->parse($xml);
    }
}
