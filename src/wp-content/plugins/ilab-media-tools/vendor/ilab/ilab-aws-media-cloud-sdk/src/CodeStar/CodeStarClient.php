<?php
namespace ILABAmazon\CodeStar;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **AWS CodeStar** service.
 * @method \ILABAmazon\Result associateTeamMember(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateTeamMemberAsync(array $args = [])
 * @method \ILABAmazon\Result createProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProjectAsync(array $args = [])
 * @method \ILABAmazon\Result createUserProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUserProfileAsync(array $args = [])
 * @method \ILABAmazon\Result deleteProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProjectAsync(array $args = [])
 * @method \ILABAmazon\Result deleteUserProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUserProfileAsync(array $args = [])
 * @method \ILABAmazon\Result describeProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProjectAsync(array $args = [])
 * @method \ILABAmazon\Result describeUserProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUserProfileAsync(array $args = [])
 * @method \ILABAmazon\Result disassociateTeamMember(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateTeamMemberAsync(array $args = [])
 * @method \ILABAmazon\Result listProjects(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProjectsAsync(array $args = [])
 * @method \ILABAmazon\Result listResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResourcesAsync(array $args = [])
 * @method \ILABAmazon\Result listTagsForProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForProjectAsync(array $args = [])
 * @method \ILABAmazon\Result listTeamMembers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTeamMembersAsync(array $args = [])
 * @method \ILABAmazon\Result listUserProfiles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listUserProfilesAsync(array $args = [])
 * @method \ILABAmazon\Result tagProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagProjectAsync(array $args = [])
 * @method \ILABAmazon\Result untagProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagProjectAsync(array $args = [])
 * @method \ILABAmazon\Result updateProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProjectAsync(array $args = [])
 * @method \ILABAmazon\Result updateTeamMember(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTeamMemberAsync(array $args = [])
 * @method \ILABAmazon\Result updateUserProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateUserProfileAsync(array $args = [])
 */
class CodeStarClient extends AwsClient {}
