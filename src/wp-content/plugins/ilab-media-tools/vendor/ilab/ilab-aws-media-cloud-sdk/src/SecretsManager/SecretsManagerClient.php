<?php
namespace ILABAmazon\SecretsManager;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **AWS Secrets Manager** service.
 * @method \ILABAmazon\Result cancelRotateSecret(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelRotateSecretAsync(array $args = [])
 * @method \ILABAmazon\Result createSecret(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSecretAsync(array $args = [])
 * @method \ILABAmazon\Result deleteResourcePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteResourcePolicyAsync(array $args = [])
 * @method \ILABAmazon\Result deleteSecret(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSecretAsync(array $args = [])
 * @method \ILABAmazon\Result describeSecret(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSecretAsync(array $args = [])
 * @method \ILABAmazon\Result getRandomPassword(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRandomPasswordAsync(array $args = [])
 * @method \ILABAmazon\Result getResourcePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourcePolicyAsync(array $args = [])
 * @method \ILABAmazon\Result getSecretValue(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSecretValueAsync(array $args = [])
 * @method \ILABAmazon\Result listSecretVersionIds(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSecretVersionIdsAsync(array $args = [])
 * @method \ILABAmazon\Result listSecrets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSecretsAsync(array $args = [])
 * @method \ILABAmazon\Result putResourcePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putResourcePolicyAsync(array $args = [])
 * @method \ILABAmazon\Result putSecretValue(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putSecretValueAsync(array $args = [])
 * @method \ILABAmazon\Result restoreSecret(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restoreSecretAsync(array $args = [])
 * @method \ILABAmazon\Result rotateSecret(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rotateSecretAsync(array $args = [])
 * @method \ILABAmazon\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \ILABAmazon\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \ILABAmazon\Result updateSecret(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSecretAsync(array $args = [])
 * @method \ILABAmazon\Result updateSecretVersionStage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSecretVersionStageAsync(array $args = [])
 */
class SecretsManagerClient extends AwsClient {}
