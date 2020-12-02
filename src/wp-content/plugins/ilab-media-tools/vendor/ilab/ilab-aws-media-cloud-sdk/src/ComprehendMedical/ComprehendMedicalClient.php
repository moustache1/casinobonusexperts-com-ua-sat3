<?php
namespace ILABAmazon\ComprehendMedical;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **AWS Comprehend Medical** service.
 * @method \ILABAmazon\Result detectEntities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detectEntitiesAsync(array $args = [])
 * @method \ILABAmazon\Result detectPHI(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detectPHIAsync(array $args = [])
 */
class ComprehendMedicalClient extends AwsClient {}
