<?php
namespace Thecodebunny\eBayApi;

/**
 * Builds Thecodebunny\eBayApi services based on passed configuration options.
 *
 * @method \Thecodebunny\eBayApi\Account\Services\AccountService createAccount(array $args = [])
 * @method \Thecodebunny\eBayApi\Analytics\Services\AnalyticsService createAnalytics(array $args = [])
 * @method \Thecodebunny\eBayApi\Browse\Services\BrowseService createBrowse(array $args = [])
 * @method \Thecodebunny\eBayApi\BulkDataExchange\Services\BulkDataExchangeService createBulkDataExchange(array $args = [])
 * @method \Thecodebunny\eBayApi\BusinessPoliciesManagement\Services\BusinessPoliciesManagementService createBusinessPoliciesManagement(array $args = [])
 * @method \Thecodebunny\eBayApi\Feedback\Services\FeedbackService createFeedback(array $args = [])
 * @method \Thecodebunny\eBayApi\FileTransfer\Services\FileTransferService createFileTransfer(array $args = [])
 * @method \Thecodebunny\eBayApi\Finding\Services\FindingService createFinding(array $args = [])
 * @method \Thecodebunny\eBayApi\Fulfillment\Services\FulfillmentService createFulfillment(array $args = [])
 * @method \Thecodebunny\eBayApi\HalfFinding\Services\HalfFindingService createHalfFinding(array $args = [])
 * @method \Thecodebunny\eBayApi\Inventory\Services\InventoryService createInventory(array $args = [])
 * @method \Thecodebunny\eBayApi\Marketing\Services\MarketingService createMarketing(array $args = [])
 * @method \Thecodebunny\eBayApi\Merchandising\Services\MerchandisingService createMerchandising(array $args = [])
 * @method \Thecodebunny\eBayApi\Metadata\Services\MetadataService createMetadata(array $args = [])
 * @method \Thecodebunny\eBayApi\Order\Services\OrderService createOrder(array $args = [])
 * @method \Thecodebunny\eBayApi\PostOrder\Services\PostOrderService createPostOrder(array $args = [])
 * @method \Thecodebunny\eBayApi\Product\Services\ProductService createProduct(array $args = [])
 * @method \Thecodebunny\eBayApi\ProductMetadata\Services\ProductMetadataService createProductMetadata(array $args = [])
 * @method \Thecodebunny\eBayApi\RelatedItemsManagement\Services\RelatedItemsManagementService createRelatedItemsManagement(array $args = [])
 * @method \Thecodebunny\eBayApi\ResolutionCaseManagement\Services\ResolutionCaseManagementService createResolutionCaseManagement(array $args = [])
 * @method \Thecodebunny\eBayApi\ReturnManagement\Services\ReturnManagementService createReturnManagement(array $args = [])
 * @method \Thecodebunny\eBayApi\Shopping\Services\ShoppingService createShopping(array $args = [])
 * @method \Thecodebunny\eBayApi\Trading\Services\TradingService createTrading(array $args = [])
 */
class Sdk
{
    const VERSION = '18.0.0';

    /**
     * @var bool Controls if the SDK should enforce strict types
     * when values are assigned to property classes.
     */
    public static $STRICT_PROPERTY_TYPES = true;

    /**
     * @var array Configuration options for all services.
     */
    private $config;

    /**
     * @param array $config Configuration option values for all services.
     */
    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    /**
     * @param string $name The method name.
     * @param array $args Arguments that will be passed to the method.
     *
     * @return \Thecodebunny\eBayApi\Services\BaseService
     * @throws \BadMethodCallException
     */
    public function __call($name, array $args)
    {
        if (strpos($name, 'create') === 0) {
            return $this->createService(
                substr($name, 6),
                isset($args[0]) ? $args[0] : []
            );
        }

        throw new \BadMethodCallException("Unknown method: {$name}.");
    }

    /**
     * Create a service object by namespace. Service is configured using array of options.
     *
     * @param string $namespace Service namespace (e.g. Finding, Trading).
     * @param array  $config Configuration options for the service.
     *
     * @return \Thecodebunny\eBayApi\Services\BaseService
     **/
    public function createService($namespace, array $config = [])
    {
        $configuration = $this->config;

        if (isset($this->config[$namespace])) {
            $configuration = arrayMergeDeep($configuration, $this->config[$namespace]);
        }

        $configuration = arrayMergeDeep($configuration, $config);

        $service = "Thecodebunny\\eBayApi\\{$namespace}\\Services\\{$namespace}Service";

        return new $service($configuration);
    }
}
