<?php
namespace ILABAmazon\CodeBuild;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **AWS CodeBuild** service.
 * @method \ILABAmazon\Result batchDeleteBuilds(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDeleteBuildsAsync(array $args = [])
 * @method \ILABAmazon\Result batchGetBuilds(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetBuildsAsync(array $args = [])
 * @method \ILABAmazon\Result batchGetProjects(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetProjectsAsync(array $args = [])
 * @method \ILABAmazon\Result createProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProjectAsync(array $args = [])
 * @method \ILABAmazon\Result createWebhook(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createWebhookAsync(array $args = [])
 * @method \ILABAmazon\Result deleteProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProjectAsync(array $args = [])
 * @method \ILABAmazon\Result deleteSourceCredentials(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSourceCredentialsAsync(array $args = [])
 * @method \ILABAmazon\Result deleteWebhook(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteWebhookAsync(array $args = [])
 * @method \ILABAmazon\Result importSourceCredentials(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importSourceCredentialsAsync(array $args = [])
 * @method \ILABAmazon\Result invalidateProjectCache(array $args = [])
 * @method \GuzzleHttp\Promise\Promise invalidateProjectCacheAsync(array $args = [])
 * @method \ILABAmazon\Result listBuilds(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBuildsAsync(array $args = [])
 * @method \ILABAmazon\Result listBuildsForProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBuildsForProjectAsync(array $args = [])
 * @method \ILABAmazon\Result listCuratedEnvironmentImages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCuratedEnvironmentImagesAsync(array $args = [])
 * @method \ILABAmazon\Result listProjects(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProjectsAsync(array $args = [])
 * @method \ILABAmazon\Result listSourceCredentials(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSourceCredentialsAsync(array $args = [])
 * @method \ILABAmazon\Result startBuild(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startBuildAsync(array $args = [])
 * @method \ILABAmazon\Result stopBuild(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopBuildAsync(array $args = [])
 * @method \ILABAmazon\Result updateProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProjectAsync(array $args = [])
 * @method \ILABAmazon\Result updateWebhook(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateWebhookAsync(array $args = [])
 */
class CodeBuildClient extends AwsClient {}
