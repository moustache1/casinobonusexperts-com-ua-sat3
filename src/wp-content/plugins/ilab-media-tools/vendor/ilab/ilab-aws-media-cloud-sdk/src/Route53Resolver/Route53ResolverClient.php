<?php
namespace ILABAmazon\Route53Resolver;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **Amazon Route 53 Resolver** service.
 * @method \ILABAmazon\Result associateResolverEndpointIpAddress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateResolverEndpointIpAddressAsync(array $args = [])
 * @method \ILABAmazon\Result associateResolverRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateResolverRuleAsync(array $args = [])
 * @method \ILABAmazon\Result createResolverEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createResolverEndpointAsync(array $args = [])
 * @method \ILABAmazon\Result createResolverRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createResolverRuleAsync(array $args = [])
 * @method \ILABAmazon\Result deleteResolverEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteResolverEndpointAsync(array $args = [])
 * @method \ILABAmazon\Result deleteResolverRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteResolverRuleAsync(array $args = [])
 * @method \ILABAmazon\Result disassociateResolverEndpointIpAddress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateResolverEndpointIpAddressAsync(array $args = [])
 * @method \ILABAmazon\Result disassociateResolverRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateResolverRuleAsync(array $args = [])
 * @method \ILABAmazon\Result getResolverEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResolverEndpointAsync(array $args = [])
 * @method \ILABAmazon\Result getResolverRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResolverRuleAsync(array $args = [])
 * @method \ILABAmazon\Result getResolverRuleAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResolverRuleAssociationAsync(array $args = [])
 * @method \ILABAmazon\Result getResolverRulePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResolverRulePolicyAsync(array $args = [])
 * @method \ILABAmazon\Result listResolverEndpointIpAddresses(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResolverEndpointIpAddressesAsync(array $args = [])
 * @method \ILABAmazon\Result listResolverEndpoints(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResolverEndpointsAsync(array $args = [])
 * @method \ILABAmazon\Result listResolverRuleAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResolverRuleAssociationsAsync(array $args = [])
 * @method \ILABAmazon\Result listResolverRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResolverRulesAsync(array $args = [])
 * @method \ILABAmazon\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \ILABAmazon\Result putResolverRulePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putResolverRulePolicyAsync(array $args = [])
 * @method \ILABAmazon\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \ILABAmazon\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \ILABAmazon\Result updateResolverEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateResolverEndpointAsync(array $args = [])
 * @method \ILABAmazon\Result updateResolverRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateResolverRuleAsync(array $args = [])
 */
class Route53ResolverClient extends AwsClient {}
