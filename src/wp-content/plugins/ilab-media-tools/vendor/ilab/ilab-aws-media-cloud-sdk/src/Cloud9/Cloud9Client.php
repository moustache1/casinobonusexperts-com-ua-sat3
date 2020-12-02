<?php
namespace ILABAmazon\Cloud9;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **AWS Cloud9** service.
 * @method \ILABAmazon\Result createEnvironmentEC2(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createEnvironmentEC2Async(array $args = [])
 * @method \ILABAmazon\Result createEnvironmentMembership(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createEnvironmentMembershipAsync(array $args = [])
 * @method \ILABAmazon\Result deleteEnvironment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEnvironmentAsync(array $args = [])
 * @method \ILABAmazon\Result deleteEnvironmentMembership(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEnvironmentMembershipAsync(array $args = [])
 * @method \ILABAmazon\Result describeEnvironmentMemberships(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEnvironmentMembershipsAsync(array $args = [])
 * @method \ILABAmazon\Result describeEnvironmentStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEnvironmentStatusAsync(array $args = [])
 * @method \ILABAmazon\Result describeEnvironments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEnvironmentsAsync(array $args = [])
 * @method \ILABAmazon\Result listEnvironments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEnvironmentsAsync(array $args = [])
 * @method \ILABAmazon\Result updateEnvironment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateEnvironmentAsync(array $args = [])
 * @method \ILABAmazon\Result updateEnvironmentMembership(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateEnvironmentMembershipAsync(array $args = [])
 */
class Cloud9Client extends AwsClient {}
