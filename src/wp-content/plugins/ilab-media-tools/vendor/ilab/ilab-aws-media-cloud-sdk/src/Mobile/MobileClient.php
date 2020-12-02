<?php
namespace ILABAmazon\Mobile;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **AWS Mobile** service.
 * @method \ILABAmazon\Result createProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProjectAsync(array $args = [])
 * @method \ILABAmazon\Result deleteProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProjectAsync(array $args = [])
 * @method \ILABAmazon\Result describeBundle(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBundleAsync(array $args = [])
 * @method \ILABAmazon\Result describeProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProjectAsync(array $args = [])
 * @method \ILABAmazon\Result exportBundle(array $args = [])
 * @method \GuzzleHttp\Promise\Promise exportBundleAsync(array $args = [])
 * @method \ILABAmazon\Result exportProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise exportProjectAsync(array $args = [])
 * @method \ILABAmazon\Result listBundles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBundlesAsync(array $args = [])
 * @method \ILABAmazon\Result listProjects(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProjectsAsync(array $args = [])
 * @method \ILABAmazon\Result updateProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProjectAsync(array $args = [])
 */
class MobileClient extends AwsClient {}
