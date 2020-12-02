<?php
namespace ILABAmazon\IoT1ClickDevicesService;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **AWS IoT 1-Click Devices Service** service.
 * @method \ILABAmazon\Result claimDevicesByClaimCode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise claimDevicesByClaimCodeAsync(array $args = [])
 * @method \ILABAmazon\Result describeDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDeviceAsync(array $args = [])
 * @method \ILABAmazon\Result finalizeDeviceClaim(array $args = [])
 * @method \GuzzleHttp\Promise\Promise finalizeDeviceClaimAsync(array $args = [])
 * @method \ILABAmazon\Result getDeviceMethods(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeviceMethodsAsync(array $args = [])
 * @method \ILABAmazon\Result initiateDeviceClaim(array $args = [])
 * @method \GuzzleHttp\Promise\Promise initiateDeviceClaimAsync(array $args = [])
 * @method \ILABAmazon\Result invokeDeviceMethod(array $args = [])
 * @method \GuzzleHttp\Promise\Promise invokeDeviceMethodAsync(array $args = [])
 * @method \ILABAmazon\Result listDeviceEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDeviceEventsAsync(array $args = [])
 * @method \ILABAmazon\Result listDevices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDevicesAsync(array $args = [])
 * @method \ILABAmazon\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \ILABAmazon\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \ILABAmazon\Result unclaimDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise unclaimDeviceAsync(array $args = [])
 * @method \ILABAmazon\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \ILABAmazon\Result updateDeviceState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDeviceStateAsync(array $args = [])
 */
class IoT1ClickDevicesServiceClient extends AwsClient {}
