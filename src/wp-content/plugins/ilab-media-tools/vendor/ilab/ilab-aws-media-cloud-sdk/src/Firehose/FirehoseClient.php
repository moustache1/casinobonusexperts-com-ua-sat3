<?php
namespace ILABAmazon\Firehose;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **Amazon Kinesis Firehose** service.
 *
 * @method \ILABAmazon\Result createDeliveryStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDeliveryStreamAsync(array $args = [])
 * @method \ILABAmazon\Result deleteDeliveryStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDeliveryStreamAsync(array $args = [])
 * @method \ILABAmazon\Result describeDeliveryStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDeliveryStreamAsync(array $args = [])
 * @method \ILABAmazon\Result listDeliveryStreams(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDeliveryStreamsAsync(array $args = [])
 * @method \ILABAmazon\Result listTagsForDeliveryStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForDeliveryStreamAsync(array $args = [])
 * @method \ILABAmazon\Result putRecord(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRecordAsync(array $args = [])
 * @method \ILABAmazon\Result putRecordBatch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRecordBatchAsync(array $args = [])
 * @method \ILABAmazon\Result startDeliveryStreamEncryption(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startDeliveryStreamEncryptionAsync(array $args = [])
 * @method \ILABAmazon\Result stopDeliveryStreamEncryption(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopDeliveryStreamEncryptionAsync(array $args = [])
 * @method \ILABAmazon\Result tagDeliveryStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagDeliveryStreamAsync(array $args = [])
 * @method \ILABAmazon\Result untagDeliveryStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagDeliveryStreamAsync(array $args = [])
 * @method \ILABAmazon\Result updateDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDestinationAsync(array $args = [])
 */
class FirehoseClient extends AwsClient {}
