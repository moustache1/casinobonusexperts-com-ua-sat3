<?php
namespace ILABAmazon\Efs;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with **Amazon EFS**.
 *
 * @method \ILABAmazon\Result createFileSystem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFileSystemAsync(array $args = [])
 * @method \ILABAmazon\Result createMountTarget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMountTargetAsync(array $args = [])
 * @method \ILABAmazon\Result createTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTagsAsync(array $args = [])
 * @method \ILABAmazon\Result deleteFileSystem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFileSystemAsync(array $args = [])
 * @method \ILABAmazon\Result deleteMountTarget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMountTargetAsync(array $args = [])
 * @method \ILABAmazon\Result deleteTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTagsAsync(array $args = [])
 * @method \ILABAmazon\Result describeFileSystems(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFileSystemsAsync(array $args = [])
 * @method \ILABAmazon\Result describeLifecycleConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLifecycleConfigurationAsync(array $args = [])
 * @method \ILABAmazon\Result describeMountTargetSecurityGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMountTargetSecurityGroupsAsync(array $args = [])
 * @method \ILABAmazon\Result describeMountTargets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMountTargetsAsync(array $args = [])
 * @method \ILABAmazon\Result describeTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTagsAsync(array $args = [])
 * @method \ILABAmazon\Result modifyMountTargetSecurityGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyMountTargetSecurityGroupsAsync(array $args = [])
 * @method \ILABAmazon\Result putLifecycleConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putLifecycleConfigurationAsync(array $args = [])
 * @method \ILABAmazon\Result updateFileSystem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFileSystemAsync(array $args = [])
 */
class EfsClient extends AwsClient {}
