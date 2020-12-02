<?php
namespace ILABAmazon\signer;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **AWS Signer** service.
 * @method \ILABAmazon\Result cancelSigningProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelSigningProfileAsync(array $args = [])
 * @method \ILABAmazon\Result describeSigningJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSigningJobAsync(array $args = [])
 * @method \ILABAmazon\Result getSigningPlatform(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSigningPlatformAsync(array $args = [])
 * @method \ILABAmazon\Result getSigningProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSigningProfileAsync(array $args = [])
 * @method \ILABAmazon\Result listSigningJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSigningJobsAsync(array $args = [])
 * @method \ILABAmazon\Result listSigningPlatforms(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSigningPlatformsAsync(array $args = [])
 * @method \ILABAmazon\Result listSigningProfiles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSigningProfilesAsync(array $args = [])
 * @method \ILABAmazon\Result putSigningProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putSigningProfileAsync(array $args = [])
 * @method \ILABAmazon\Result startSigningJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startSigningJobAsync(array $args = [])
 */
class signerClient extends AwsClient {}
