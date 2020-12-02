<?php
namespace ILABAmazon\QuickSight;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **Amazon QuickSight** service.
 * @method \ILABAmazon\Result createGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGroupAsync(array $args = [])
 * @method \ILABAmazon\Result createGroupMembership(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGroupMembershipAsync(array $args = [])
 * @method \ILABAmazon\Result deleteGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteGroupAsync(array $args = [])
 * @method \ILABAmazon\Result deleteGroupMembership(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteGroupMembershipAsync(array $args = [])
 * @method \ILABAmazon\Result deleteUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUserAsync(array $args = [])
 * @method \ILABAmazon\Result deleteUserByPrincipalId(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUserByPrincipalIdAsync(array $args = [])
 * @method \ILABAmazon\Result describeGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeGroupAsync(array $args = [])
 * @method \ILABAmazon\Result describeUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUserAsync(array $args = [])
 * @method \ILABAmazon\Result getDashboardEmbedUrl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDashboardEmbedUrlAsync(array $args = [])
 * @method \ILABAmazon\Result listGroupMemberships(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGroupMembershipsAsync(array $args = [])
 * @method \ILABAmazon\Result listGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGroupsAsync(array $args = [])
 * @method \ILABAmazon\Result listUserGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listUserGroupsAsync(array $args = [])
 * @method \ILABAmazon\Result listUsers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listUsersAsync(array $args = [])
 * @method \ILABAmazon\Result registerUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerUserAsync(array $args = [])
 * @method \ILABAmazon\Result updateGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGroupAsync(array $args = [])
 * @method \ILABAmazon\Result updateUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateUserAsync(array $args = [])
 */
class QuickSightClient extends AwsClient {}
