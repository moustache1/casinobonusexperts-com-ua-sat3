<?php
namespace ILABAmazon\ManagedBlockchain;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **Amazon Managed Blockchain** service.
 * @method \ILABAmazon\Result createMember(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMemberAsync(array $args = [])
 * @method \ILABAmazon\Result createNetwork(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createNetworkAsync(array $args = [])
 * @method \ILABAmazon\Result createNode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createNodeAsync(array $args = [])
 * @method \ILABAmazon\Result createProposal(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProposalAsync(array $args = [])
 * @method \ILABAmazon\Result deleteMember(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMemberAsync(array $args = [])
 * @method \ILABAmazon\Result deleteNode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteNodeAsync(array $args = [])
 * @method \ILABAmazon\Result getMember(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMemberAsync(array $args = [])
 * @method \ILABAmazon\Result getNetwork(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getNetworkAsync(array $args = [])
 * @method \ILABAmazon\Result getNode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getNodeAsync(array $args = [])
 * @method \ILABAmazon\Result getProposal(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getProposalAsync(array $args = [])
 * @method \ILABAmazon\Result listInvitations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listInvitationsAsync(array $args = [])
 * @method \ILABAmazon\Result listMembers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMembersAsync(array $args = [])
 * @method \ILABAmazon\Result listNetworks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listNetworksAsync(array $args = [])
 * @method \ILABAmazon\Result listNodes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listNodesAsync(array $args = [])
 * @method \ILABAmazon\Result listProposalVotes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProposalVotesAsync(array $args = [])
 * @method \ILABAmazon\Result listProposals(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProposalsAsync(array $args = [])
 * @method \ILABAmazon\Result rejectInvitation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rejectInvitationAsync(array $args = [])
 * @method \ILABAmazon\Result voteOnProposal(array $args = [])
 * @method \GuzzleHttp\Promise\Promise voteOnProposalAsync(array $args = [])
 */
class ManagedBlockchainClient extends AwsClient {}
