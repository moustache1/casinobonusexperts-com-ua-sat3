<?php
namespace ILABAmazon\ServiceDiscovery;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **Amazon Route 53 Auto Naming** service.
 * @method \ILABAmazon\Result createHttpNamespace(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createHttpNamespaceAsync(array $args = [])
 * @method \ILABAmazon\Result createPrivateDnsNamespace(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPrivateDnsNamespaceAsync(array $args = [])
 * @method \ILABAmazon\Result createPublicDnsNamespace(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPublicDnsNamespaceAsync(array $args = [])
 * @method \ILABAmazon\Result createService(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createServiceAsync(array $args = [])
 * @method \ILABAmazon\Result deleteNamespace(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteNamespaceAsync(array $args = [])
 * @method \ILABAmazon\Result deleteService(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteServiceAsync(array $args = [])
 * @method \ILABAmazon\Result deregisterInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterInstanceAsync(array $args = [])
 * @method \ILABAmazon\Result discoverInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise discoverInstancesAsync(array $args = [])
 * @method \ILABAmazon\Result getInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInstanceAsync(array $args = [])
 * @method \ILABAmazon\Result getInstancesHealthStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInstancesHealthStatusAsync(array $args = [])
 * @method \ILABAmazon\Result getNamespace(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getNamespaceAsync(array $args = [])
 * @method \ILABAmazon\Result getOperation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getOperationAsync(array $args = [])
 * @method \ILABAmazon\Result getService(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getServiceAsync(array $args = [])
 * @method \ILABAmazon\Result listInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listInstancesAsync(array $args = [])
 * @method \ILABAmazon\Result listNamespaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listNamespacesAsync(array $args = [])
 * @method \ILABAmazon\Result listOperations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listOperationsAsync(array $args = [])
 * @method \ILABAmazon\Result listServices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listServicesAsync(array $args = [])
 * @method \ILABAmazon\Result registerInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerInstanceAsync(array $args = [])
 * @method \ILABAmazon\Result updateInstanceCustomHealthStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateInstanceCustomHealthStatusAsync(array $args = [])
 * @method \ILABAmazon\Result updateService(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateServiceAsync(array $args = [])
 */
class ServiceDiscoveryClient extends AwsClient {}
