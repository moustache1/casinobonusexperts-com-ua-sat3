<?php
namespace ILABAmazon\ServerlessApplicationRepository;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **AWSServerlessApplicationRepository** service.
 * @method \ILABAmazon\Result createApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createApplicationAsync(array $args = [])
 * @method \ILABAmazon\Result createApplicationVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createApplicationVersionAsync(array $args = [])
 * @method \ILABAmazon\Result createCloudFormationChangeSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCloudFormationChangeSetAsync(array $args = [])
 * @method \ILABAmazon\Result createCloudFormationTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCloudFormationTemplateAsync(array $args = [])
 * @method \ILABAmazon\Result deleteApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteApplicationAsync(array $args = [])
 * @method \ILABAmazon\Result getApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getApplicationAsync(array $args = [])
 * @method \ILABAmazon\Result getApplicationPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getApplicationPolicyAsync(array $args = [])
 * @method \ILABAmazon\Result getCloudFormationTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCloudFormationTemplateAsync(array $args = [])
 * @method \ILABAmazon\Result listApplicationDependencies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listApplicationDependenciesAsync(array $args = [])
 * @method \ILABAmazon\Result listApplicationVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listApplicationVersionsAsync(array $args = [])
 * @method \ILABAmazon\Result listApplications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listApplicationsAsync(array $args = [])
 * @method \ILABAmazon\Result putApplicationPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putApplicationPolicyAsync(array $args = [])
 * @method \ILABAmazon\Result updateApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateApplicationAsync(array $args = [])
 */
class ServerlessApplicationRepositoryClient extends AwsClient {}
