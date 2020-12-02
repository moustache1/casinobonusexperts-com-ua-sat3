<?php
namespace ILABAmazon\ResourceGroups;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **AWS Resource Groups** service.
 * @method \ILABAmazon\Result createGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGroupAsync(array $args = [])
 * @method \ILABAmazon\Result deleteGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteGroupAsync(array $args = [])
 * @method \ILABAmazon\Result getGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGroupAsync(array $args = [])
 * @method \ILABAmazon\Result getGroupQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGroupQueryAsync(array $args = [])
 * @method \ILABAmazon\Result getTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTagsAsync(array $args = [])
 * @method \ILABAmazon\Result listGroupResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGroupResourcesAsync(array $args = [])
 * @method \ILABAmazon\Result listGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGroupsAsync(array $args = [])
 * @method \ILABAmazon\Result searchResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchResourcesAsync(array $args = [])
 * @method \ILABAmazon\Result tag(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagAsync(array $args = [])
 * @method \ILABAmazon\Result untag(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagAsync(array $args = [])
 * @method \ILABAmazon\Result updateGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGroupAsync(array $args = [])
 * @method \ILABAmazon\Result updateGroupQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGroupQueryAsync(array $args = [])
 */
class ResourceGroupsClient extends AwsClient {}
