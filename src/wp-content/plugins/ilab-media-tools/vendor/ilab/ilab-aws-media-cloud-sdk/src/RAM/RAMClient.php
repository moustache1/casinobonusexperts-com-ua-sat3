<?php
namespace ILABAmazon\RAM;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **AWS Resource Access Manager** service.
 * @method \ILABAmazon\Result acceptResourceShareInvitation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise acceptResourceShareInvitationAsync(array $args = [])
 * @method \ILABAmazon\Result associateResourceShare(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateResourceShareAsync(array $args = [])
 * @method \ILABAmazon\Result createResourceShare(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createResourceShareAsync(array $args = [])
 * @method \ILABAmazon\Result deleteResourceShare(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteResourceShareAsync(array $args = [])
 * @method \ILABAmazon\Result disassociateResourceShare(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateResourceShareAsync(array $args = [])
 * @method \ILABAmazon\Result enableSharingWithAwsOrganization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableSharingWithAwsOrganizationAsync(array $args = [])
 * @method \ILABAmazon\Result getResourcePolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourcePoliciesAsync(array $args = [])
 * @method \ILABAmazon\Result getResourceShareAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourceShareAssociationsAsync(array $args = [])
 * @method \ILABAmazon\Result getResourceShareInvitations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourceShareInvitationsAsync(array $args = [])
 * @method \ILABAmazon\Result getResourceShares(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourceSharesAsync(array $args = [])
 * @method \ILABAmazon\Result listPrincipals(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPrincipalsAsync(array $args = [])
 * @method \ILABAmazon\Result listResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResourcesAsync(array $args = [])
 * @method \ILABAmazon\Result rejectResourceShareInvitation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rejectResourceShareInvitationAsync(array $args = [])
 * @method \ILABAmazon\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \ILABAmazon\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \ILABAmazon\Result updateResourceShare(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateResourceShareAsync(array $args = [])
 */
class RAMClient extends AwsClient {}
