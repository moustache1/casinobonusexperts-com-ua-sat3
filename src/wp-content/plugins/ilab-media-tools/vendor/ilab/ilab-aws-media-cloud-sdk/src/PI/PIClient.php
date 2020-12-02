<?php
namespace ILABAmazon\PI;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **AWS Performance Insights** service.
 * @method \ILABAmazon\Result describeDimensionKeys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDimensionKeysAsync(array $args = [])
 * @method \ILABAmazon\Result getResourceMetrics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourceMetricsAsync(array $args = [])
 */
class PIClient extends AwsClient {}
