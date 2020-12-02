<?php
namespace ILABAmazon\KinesisVideoArchivedMedia;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **Amazon Kinesis Video Streams Archived Media** service.
 * @method \ILABAmazon\Result getHLSStreamingSessionURL(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getHLSStreamingSessionURLAsync(array $args = [])
 * @method \ILABAmazon\Result getMediaForFragmentList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMediaForFragmentListAsync(array $args = [])
 * @method \ILABAmazon\Result listFragments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFragmentsAsync(array $args = [])
 */
class KinesisVideoArchivedMediaClient extends AwsClient {}
