<?php
namespace ILABAmazon\IoT1ClickProjects;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **AWS IoT 1-Click Projects Service** service.
 * @method \ILABAmazon\Result associateDeviceWithPlacement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateDeviceWithPlacementAsync(array $args = [])
 * @method \ILABAmazon\Result createPlacement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPlacementAsync(array $args = [])
 * @method \ILABAmazon\Result createProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProjectAsync(array $args = [])
 * @method \ILABAmazon\Result deletePlacement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePlacementAsync(array $args = [])
 * @method \ILABAmazon\Result deleteProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProjectAsync(array $args = [])
 * @method \ILABAmazon\Result describePlacement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePlacementAsync(array $args = [])
 * @method \ILABAmazon\Result describeProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProjectAsync(array $args = [])
 * @method \ILABAmazon\Result disassociateDeviceFromPlacement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateDeviceFromPlacementAsync(array $args = [])
 * @method \ILABAmazon\Result getDevicesInPlacement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDevicesInPlacementAsync(array $args = [])
 * @method \ILABAmazon\Result listPlacements(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPlacementsAsync(array $args = [])
 * @method \ILABAmazon\Result listProjects(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProjectsAsync(array $args = [])
 * @method \ILABAmazon\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \ILABAmazon\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \ILABAmazon\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \ILABAmazon\Result updatePlacement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePlacementAsync(array $args = [])
 * @method \ILABAmazon\Result updateProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProjectAsync(array $args = [])
 */
class IoT1ClickProjectsClient extends AwsClient {}
