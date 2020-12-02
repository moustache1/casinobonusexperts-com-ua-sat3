<?php
namespace ILABAmazon\IoTEventsData;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **AWS IoT Events Data** service.
 * @method \ILABAmazon\Result batchPutMessage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchPutMessageAsync(array $args = [])
 * @method \ILABAmazon\Result batchUpdateDetector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchUpdateDetectorAsync(array $args = [])
 * @method \ILABAmazon\Result describeDetector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDetectorAsync(array $args = [])
 * @method \ILABAmazon\Result listDetectors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDetectorsAsync(array $args = [])
 */
class IoTEventsDataClient extends AwsClient {}
