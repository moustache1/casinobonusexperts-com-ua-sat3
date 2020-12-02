<?php
namespace ILABAmazon\MigrationHub;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **AWS Migration Hub** service.
 * @method \ILABAmazon\Result associateCreatedArtifact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateCreatedArtifactAsync(array $args = [])
 * @method \ILABAmazon\Result associateDiscoveredResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateDiscoveredResourceAsync(array $args = [])
 * @method \ILABAmazon\Result createProgressUpdateStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProgressUpdateStreamAsync(array $args = [])
 * @method \ILABAmazon\Result deleteProgressUpdateStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProgressUpdateStreamAsync(array $args = [])
 * @method \ILABAmazon\Result describeApplicationState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeApplicationStateAsync(array $args = [])
 * @method \ILABAmazon\Result describeMigrationTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMigrationTaskAsync(array $args = [])
 * @method \ILABAmazon\Result disassociateCreatedArtifact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateCreatedArtifactAsync(array $args = [])
 * @method \ILABAmazon\Result disassociateDiscoveredResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateDiscoveredResourceAsync(array $args = [])
 * @method \ILABAmazon\Result importMigrationTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importMigrationTaskAsync(array $args = [])
 * @method \ILABAmazon\Result listCreatedArtifacts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCreatedArtifactsAsync(array $args = [])
 * @method \ILABAmazon\Result listDiscoveredResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDiscoveredResourcesAsync(array $args = [])
 * @method \ILABAmazon\Result listMigrationTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMigrationTasksAsync(array $args = [])
 * @method \ILABAmazon\Result listProgressUpdateStreams(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProgressUpdateStreamsAsync(array $args = [])
 * @method \ILABAmazon\Result notifyApplicationState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise notifyApplicationStateAsync(array $args = [])
 * @method \ILABAmazon\Result notifyMigrationTaskState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise notifyMigrationTaskStateAsync(array $args = [])
 * @method \ILABAmazon\Result putResourceAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putResourceAttributesAsync(array $args = [])
 */
class MigrationHubClient extends AwsClient {}
