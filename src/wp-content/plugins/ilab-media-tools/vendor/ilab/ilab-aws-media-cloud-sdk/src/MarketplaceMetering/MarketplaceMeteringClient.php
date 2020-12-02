<?php
namespace ILABAmazon\MarketplaceMetering;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **AWSMarketplace Metering** service.
 * @method \ILABAmazon\Result batchMeterUsage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchMeterUsageAsync(array $args = [])
 * @method \ILABAmazon\Result meterUsage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise meterUsageAsync(array $args = [])
 * @method \ILABAmazon\Result registerUsage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerUsageAsync(array $args = [])
 * @method \ILABAmazon\Result resolveCustomer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resolveCustomerAsync(array $args = [])
 */
class MarketplaceMeteringClient extends AwsClient {}
