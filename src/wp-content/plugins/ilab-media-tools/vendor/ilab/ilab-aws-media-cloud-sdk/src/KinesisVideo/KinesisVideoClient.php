<?php
namespace ILABAmazon\KinesisVideo;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **Amazon Kinesis Video Streams** service.
 * @method \ILABAmazon\Result createStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createStreamAsync(array $args = [])
 * @method \ILABAmazon\Result deleteStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteStreamAsync(array $args = [])
 * @method \ILABAmazon\Result describeStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStreamAsync(array $args = [])
 * @method \ILABAmazon\Result getDataEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDataEndpointAsync(array $args = [])
 * @method \ILABAmazon\Result listStreams(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listStreamsAsync(array $args = [])
 * @method \ILABAmazon\Result listTagsForStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForStreamAsync(array $args = [])
 * @method \ILABAmazon\Result tagStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagStreamAsync(array $args = [])
 * @method \ILABAmazon\Result untagStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagStreamAsync(array $args = [])
 * @method \ILABAmazon\Result updateDataRetention(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDataRetentionAsync(array $args = [])
 * @method \ILABAmazon\Result updateStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateStreamAsync(array $args = [])
 */
class KinesisVideoClient extends AwsClient {}
