<?php
namespace ILABAmazon\GlobalAccelerator;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **AWS Global Accelerator** service.
 * @method \ILABAmazon\Result createAccelerator(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAcceleratorAsync(array $args = [])
 * @method \ILABAmazon\Result createEndpointGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createEndpointGroupAsync(array $args = [])
 * @method \ILABAmazon\Result createListener(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createListenerAsync(array $args = [])
 * @method \ILABAmazon\Result deleteAccelerator(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAcceleratorAsync(array $args = [])
 * @method \ILABAmazon\Result deleteEndpointGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEndpointGroupAsync(array $args = [])
 * @method \ILABAmazon\Result deleteListener(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteListenerAsync(array $args = [])
 * @method \ILABAmazon\Result describeAccelerator(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAcceleratorAsync(array $args = [])
 * @method \ILABAmazon\Result describeAcceleratorAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAcceleratorAttributesAsync(array $args = [])
 * @method \ILABAmazon\Result describeEndpointGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEndpointGroupAsync(array $args = [])
 * @method \ILABAmazon\Result describeListener(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeListenerAsync(array $args = [])
 * @method \ILABAmazon\Result listAccelerators(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAcceleratorsAsync(array $args = [])
 * @method \ILABAmazon\Result listEndpointGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEndpointGroupsAsync(array $args = [])
 * @method \ILABAmazon\Result listListeners(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listListenersAsync(array $args = [])
 * @method \ILABAmazon\Result updateAccelerator(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAcceleratorAsync(array $args = [])
 * @method \ILABAmazon\Result updateAcceleratorAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAcceleratorAttributesAsync(array $args = [])
 * @method \ILABAmazon\Result updateEndpointGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateEndpointGroupAsync(array $args = [])
 * @method \ILABAmazon\Result updateListener(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateListenerAsync(array $args = [])
 */
class GlobalAcceleratorClient extends AwsClient {}
