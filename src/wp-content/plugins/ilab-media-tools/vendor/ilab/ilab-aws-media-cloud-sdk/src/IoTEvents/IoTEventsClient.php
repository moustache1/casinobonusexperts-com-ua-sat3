<?php
namespace ILABAmazon\IoTEvents;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **AWS IoT Events** service.
 * @method \ILABAmazon\Result createDetectorModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDetectorModelAsync(array $args = [])
 * @method \ILABAmazon\Result createInput(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInputAsync(array $args = [])
 * @method \ILABAmazon\Result deleteDetectorModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDetectorModelAsync(array $args = [])
 * @method \ILABAmazon\Result deleteInput(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteInputAsync(array $args = [])
 * @method \ILABAmazon\Result describeDetectorModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDetectorModelAsync(array $args = [])
 * @method \ILABAmazon\Result describeInput(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInputAsync(array $args = [])
 * @method \ILABAmazon\Result describeLoggingOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLoggingOptionsAsync(array $args = [])
 * @method \ILABAmazon\Result listDetectorModelVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDetectorModelVersionsAsync(array $args = [])
 * @method \ILABAmazon\Result listDetectorModels(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDetectorModelsAsync(array $args = [])
 * @method \ILABAmazon\Result listInputs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listInputsAsync(array $args = [])
 * @method \ILABAmazon\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \ILABAmazon\Result putLoggingOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putLoggingOptionsAsync(array $args = [])
 * @method \ILABAmazon\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \ILABAmazon\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \ILABAmazon\Result updateDetectorModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDetectorModelAsync(array $args = [])
 * @method \ILABAmazon\Result updateInput(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateInputAsync(array $args = [])
 */
class IoTEventsClient extends AwsClient {}
