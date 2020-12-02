<?php
namespace ILABAmazon\Translate;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **Amazon Translate** service.
 * @method \ILABAmazon\Result deleteTerminology(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTerminologyAsync(array $args = [])
 * @method \ILABAmazon\Result getTerminology(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTerminologyAsync(array $args = [])
 * @method \ILABAmazon\Result importTerminology(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importTerminologyAsync(array $args = [])
 * @method \ILABAmazon\Result listTerminologies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTerminologiesAsync(array $args = [])
 * @method \ILABAmazon\Result translateText(array $args = [])
 * @method \GuzzleHttp\Promise\Promise translateTextAsync(array $args = [])
 */
class TranslateClient extends AwsClient {}
