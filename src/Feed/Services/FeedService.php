<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Thecodebunny\eBayApi\Feed\Services;

class FeedService extends \Thecodebunny\eBayApi\Feed\Services\FeedBaseService
{
    const API_VERSION = 'v1_beta';

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    protected static $operations = [
        'GetItemFeed' => [
            'method' => 'GET',
            'resource' => 'item_summary',
            'responseClass' => '\Thecodebunny\eBayApi\Feed\Types\GetItemFeedRestResponse',
            'params' => [
                'category_id' => [
                    'valid' => ['string'],
                    'required' => true
                ],
                'date' => [
                    'valid' => ['string'],
                    'required' => true
                ],
                'feed_type' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ]
    ];

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \Thecodebunny\eBayApi\Feed\Types\GetItemFeedRestRequest $request
     * @return \Thecodebunny\eBayApi\Feed\Types\GetItemFeedRestResponse
     */
    public function getItemFeed(\Thecodebunny\eBayApi\Feed\Types\GetItemFeedRestRequest $request)
    {
        return $this->getItemFeedAsync($request)->wait();
    }

    /**
     * @param \Thecodebunny\eBayApi\Feed\Types\GetItemFeedRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getItemFeedAsync(\Thecodebunny\eBayApi\Feed\Types\GetItemFeedRestRequest $request)
    {
        return $this->callOperationAsync('GetItemFeed', $request);
    }
}
