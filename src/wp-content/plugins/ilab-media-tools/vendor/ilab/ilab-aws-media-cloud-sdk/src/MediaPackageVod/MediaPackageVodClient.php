<?php
namespace ILABAmazon\MediaPackageVod;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **AWS Elemental MediaPackage VOD** service.
 * @method \ILABAmazon\Result createAsset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAssetAsync(array $args = [])
 * @method \ILABAmazon\Result createPackagingConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPackagingConfigurationAsync(array $args = [])
 * @method \ILABAmazon\Result createPackagingGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPackagingGroupAsync(array $args = [])
 * @method \ILABAmazon\Result deleteAsset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAssetAsync(array $args = [])
 * @method \ILABAmazon\Result deletePackagingConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePackagingConfigurationAsync(array $args = [])
 * @method \ILABAmazon\Result deletePackagingGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePackagingGroupAsync(array $args = [])
 * @method \ILABAmazon\Result describeAsset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAssetAsync(array $args = [])
 * @method \ILABAmazon\Result describePackagingConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePackagingConfigurationAsync(array $args = [])
 * @method \ILABAmazon\Result describePackagingGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePackagingGroupAsync(array $args = [])
 * @method \ILABAmazon\Result listAssets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAssetsAsync(array $args = [])
 * @method \ILABAmazon\Result listPackagingConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPackagingConfigurationsAsync(array $args = [])
 * @method \ILABAmazon\Result listPackagingGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPackagingGroupsAsync(array $args = [])
 */
class MediaPackageVodClient extends AwsClient {}
