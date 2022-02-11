<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Thecodebunny\eBayApi\HalfFinding\Services;

class HalfFindingService extends \Thecodebunny\eBayApi\HalfFinding\Services\HalfFindingBaseService
{
    const API_VERSION = '1.2.0';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \Thecodebunny\eBayApi\HalfFinding\Types\GetVersionRequest $request
     * @return \Thecodebunny\eBayApi\HalfFinding\Types\GetVersionResponse
     */
    public function getVersion(\Thecodebunny\eBayApi\HalfFinding\Types\GetVersionRequest $request)
    {
        return $this->getVersionAsync($request)->wait();
    }

    /**
     * @param \Thecodebunny\eBayApi\HalfFinding\Types\GetVersionRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getVersionAsync(\Thecodebunny\eBayApi\HalfFinding\Types\GetVersionRequest $request)
    {
        return $this->callOperationAsync(
            'getVersion',
            $request,
            '\Thecodebunny\eBayApi\HalfFinding\Types\GetVersionResponse'
        );
    }

    /**
     * @param \Thecodebunny\eBayApi\HalfFinding\Types\FindItemsRequest $request
     * @return \Thecodebunny\eBayApi\HalfFinding\Types\FindItemsResponse
     */
    public function findHalfItems(\Thecodebunny\eBayApi\HalfFinding\Types\FindItemsRequest $request)
    {
        return $this->findHalfItemsAsync($request)->wait();
    }

    /**
     * @param \Thecodebunny\eBayApi\HalfFinding\Types\FindItemsRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findHalfItemsAsync(\Thecodebunny\eBayApi\HalfFinding\Types\FindItemsRequest $request)
    {
        return $this->callOperationAsync(
            'findHalfItems',
            $request,
            '\Thecodebunny\eBayApi\HalfFinding\Types\FindItemsResponse'
        );
    }
}