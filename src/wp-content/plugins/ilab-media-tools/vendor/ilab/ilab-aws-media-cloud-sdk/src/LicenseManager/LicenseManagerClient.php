<?php
namespace ILABAmazon\LicenseManager;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **AWS License Manager** service.
 * @method \ILABAmazon\Result createLicenseConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLicenseConfigurationAsync(array $args = [])
 * @method \ILABAmazon\Result deleteLicenseConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLicenseConfigurationAsync(array $args = [])
 * @method \ILABAmazon\Result getLicenseConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLicenseConfigurationAsync(array $args = [])
 * @method \ILABAmazon\Result getServiceSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getServiceSettingsAsync(array $args = [])
 * @method \ILABAmazon\Result listAssociationsForLicenseConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAssociationsForLicenseConfigurationAsync(array $args = [])
 * @method \ILABAmazon\Result listLicenseConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLicenseConfigurationsAsync(array $args = [])
 * @method \ILABAmazon\Result listLicenseSpecificationsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLicenseSpecificationsForResourceAsync(array $args = [])
 * @method \ILABAmazon\Result listResourceInventory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResourceInventoryAsync(array $args = [])
 * @method \ILABAmazon\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \ILABAmazon\Result listUsageForLicenseConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listUsageForLicenseConfigurationAsync(array $args = [])
 * @method \ILABAmazon\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \ILABAmazon\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \ILABAmazon\Result updateLicenseConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateLicenseConfigurationAsync(array $args = [])
 * @method \ILABAmazon\Result updateLicenseSpecificationsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateLicenseSpecificationsForResourceAsync(array $args = [])
 * @method \ILABAmazon\Result updateServiceSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateServiceSettingsAsync(array $args = [])
 */
class LicenseManagerClient extends AwsClient {}
