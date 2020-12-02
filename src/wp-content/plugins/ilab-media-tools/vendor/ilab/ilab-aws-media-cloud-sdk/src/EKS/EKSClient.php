<?php
namespace ILABAmazon\EKS;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **Amazon Elastic Container Service for Kubernetes** service.
 * @method \ILABAmazon\Result createCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createClusterAsync(array $args = [])
 * @method \ILABAmazon\Result deleteCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteClusterAsync(array $args = [])
 * @method \ILABAmazon\Result describeCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClusterAsync(array $args = [])
 * @method \ILABAmazon\Result describeUpdate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUpdateAsync(array $args = [])
 * @method \ILABAmazon\Result listClusters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listClustersAsync(array $args = [])
 * @method \ILABAmazon\Result listUpdates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listUpdatesAsync(array $args = [])
 * @method \ILABAmazon\Result updateClusterConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateClusterConfigAsync(array $args = [])
 * @method \ILABAmazon\Result updateClusterVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateClusterVersionAsync(array $args = [])
 */
class EKSClient extends AwsClient {}
