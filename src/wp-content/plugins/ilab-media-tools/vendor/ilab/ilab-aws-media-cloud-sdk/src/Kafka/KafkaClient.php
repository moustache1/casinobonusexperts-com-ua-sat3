<?php
namespace ILABAmazon\Kafka;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **Managed Streaming for Kafka** service.
 * @method \ILABAmazon\Result createCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createClusterAsync(array $args = [])
 * @method \ILABAmazon\Result createConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createConfigurationAsync(array $args = [])
 * @method \ILABAmazon\Result deleteCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteClusterAsync(array $args = [])
 * @method \ILABAmazon\Result describeCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClusterAsync(array $args = [])
 * @method \ILABAmazon\Result describeClusterOperation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClusterOperationAsync(array $args = [])
 * @method \ILABAmazon\Result describeConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConfigurationAsync(array $args = [])
 * @method \ILABAmazon\Result describeConfigurationRevision(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConfigurationRevisionAsync(array $args = [])
 * @method \ILABAmazon\Result getBootstrapBrokers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBootstrapBrokersAsync(array $args = [])
 * @method \ILABAmazon\Result listClusterOperations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listClusterOperationsAsync(array $args = [])
 * @method \ILABAmazon\Result listClusters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listClustersAsync(array $args = [])
 * @method \ILABAmazon\Result listConfigurationRevisions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listConfigurationRevisionsAsync(array $args = [])
 * @method \ILABAmazon\Result listConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listConfigurationsAsync(array $args = [])
 * @method \ILABAmazon\Result listNodes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listNodesAsync(array $args = [])
 * @method \ILABAmazon\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \ILABAmazon\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \ILABAmazon\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \ILABAmazon\Result updateBrokerStorage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateBrokerStorageAsync(array $args = [])
 * @method \ILABAmazon\Result updateClusterConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateClusterConfigurationAsync(array $args = [])
 */
class KafkaClient extends AwsClient {}
