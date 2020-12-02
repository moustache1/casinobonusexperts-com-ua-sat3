<?php
namespace ILABAmazon\MediaConnect;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **AWS MediaConnect** service.
 * @method \ILABAmazon\Result addFlowOutputs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addFlowOutputsAsync(array $args = [])
 * @method \ILABAmazon\Result createFlow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFlowAsync(array $args = [])
 * @method \ILABAmazon\Result deleteFlow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFlowAsync(array $args = [])
 * @method \ILABAmazon\Result describeFlow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFlowAsync(array $args = [])
 * @method \ILABAmazon\Result grantFlowEntitlements(array $args = [])
 * @method \GuzzleHttp\Promise\Promise grantFlowEntitlementsAsync(array $args = [])
 * @method \ILABAmazon\Result listEntitlements(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEntitlementsAsync(array $args = [])
 * @method \ILABAmazon\Result listFlows(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFlowsAsync(array $args = [])
 * @method \ILABAmazon\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \ILABAmazon\Result removeFlowOutput(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeFlowOutputAsync(array $args = [])
 * @method \ILABAmazon\Result revokeFlowEntitlement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise revokeFlowEntitlementAsync(array $args = [])
 * @method \ILABAmazon\Result startFlow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startFlowAsync(array $args = [])
 * @method \ILABAmazon\Result stopFlow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopFlowAsync(array $args = [])
 * @method \ILABAmazon\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \ILABAmazon\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \ILABAmazon\Result updateFlowEntitlement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFlowEntitlementAsync(array $args = [])
 * @method \ILABAmazon\Result updateFlowOutput(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFlowOutputAsync(array $args = [])
 * @method \ILABAmazon\Result updateFlowSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFlowSourceAsync(array $args = [])
 */
class MediaConnectClient extends AwsClient {}
