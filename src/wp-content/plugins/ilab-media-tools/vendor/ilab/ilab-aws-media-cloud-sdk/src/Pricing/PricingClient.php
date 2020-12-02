<?php
namespace ILABAmazon\Pricing;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **AWS Price List Service** service.
 * @method \ILABAmazon\Result describeServices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeServicesAsync(array $args = [])
 * @method \ILABAmazon\Result getAttributeValues(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAttributeValuesAsync(array $args = [])
 * @method \ILABAmazon\Result getProducts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getProductsAsync(array $args = [])
 */
class PricingClient extends AwsClient {}
