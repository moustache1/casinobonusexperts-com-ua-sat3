<?php
namespace ILABAmazon\MediaStore;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **AWS Elemental MediaStore** service.
 * @method \ILABAmazon\Result createContainer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createContainerAsync(array $args = [])
 * @method \ILABAmazon\Result deleteContainer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteContainerAsync(array $args = [])
 * @method \ILABAmazon\Result deleteContainerPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteContainerPolicyAsync(array $args = [])
 * @method \ILABAmazon\Result deleteCorsPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCorsPolicyAsync(array $args = [])
 * @method \ILABAmazon\Result deleteLifecyclePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLifecyclePolicyAsync(array $args = [])
 * @method \ILABAmazon\Result describeContainer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeContainerAsync(array $args = [])
 * @method \ILABAmazon\Result getContainerPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getContainerPolicyAsync(array $args = [])
 * @method \ILABAmazon\Result getCorsPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCorsPolicyAsync(array $args = [])
 * @method \ILABAmazon\Result getLifecyclePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLifecyclePolicyAsync(array $args = [])
 * @method \ILABAmazon\Result listContainers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listContainersAsync(array $args = [])
 * @method \ILABAmazon\Result putContainerPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putContainerPolicyAsync(array $args = [])
 * @method \ILABAmazon\Result putCorsPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putCorsPolicyAsync(array $args = [])
 * @method \ILABAmazon\Result putLifecyclePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putLifecyclePolicyAsync(array $args = [])
 * @method \ILABAmazon\Result startAccessLogging(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startAccessLoggingAsync(array $args = [])
 * @method \ILABAmazon\Result stopAccessLogging(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopAccessLoggingAsync(array $args = [])
 */
class MediaStoreClient extends AwsClient {}
