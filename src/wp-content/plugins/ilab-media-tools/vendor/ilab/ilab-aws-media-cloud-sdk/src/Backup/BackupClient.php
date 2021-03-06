<?php
namespace ILABAmazon\Backup;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **AWS Backup** service.
 * @method \ILABAmazon\Result createBackupPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBackupPlanAsync(array $args = [])
 * @method \ILABAmazon\Result createBackupSelection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBackupSelectionAsync(array $args = [])
 * @method \ILABAmazon\Result createBackupVault(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBackupVaultAsync(array $args = [])
 * @method \ILABAmazon\Result deleteBackupPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBackupPlanAsync(array $args = [])
 * @method \ILABAmazon\Result deleteBackupSelection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBackupSelectionAsync(array $args = [])
 * @method \ILABAmazon\Result deleteBackupVault(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBackupVaultAsync(array $args = [])
 * @method \ILABAmazon\Result deleteBackupVaultAccessPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBackupVaultAccessPolicyAsync(array $args = [])
 * @method \ILABAmazon\Result deleteBackupVaultNotifications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBackupVaultNotificationsAsync(array $args = [])
 * @method \ILABAmazon\Result deleteRecoveryPoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRecoveryPointAsync(array $args = [])
 * @method \ILABAmazon\Result describeBackupJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBackupJobAsync(array $args = [])
 * @method \ILABAmazon\Result describeBackupVault(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBackupVaultAsync(array $args = [])
 * @method \ILABAmazon\Result describeProtectedResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProtectedResourceAsync(array $args = [])
 * @method \ILABAmazon\Result describeRecoveryPoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRecoveryPointAsync(array $args = [])
 * @method \ILABAmazon\Result describeRestoreJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRestoreJobAsync(array $args = [])
 * @method \ILABAmazon\Result exportBackupPlanTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise exportBackupPlanTemplateAsync(array $args = [])
 * @method \ILABAmazon\Result getBackupPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBackupPlanAsync(array $args = [])
 * @method \ILABAmazon\Result getBackupPlanFromJSON(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBackupPlanFromJSONAsync(array $args = [])
 * @method \ILABAmazon\Result getBackupPlanFromTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBackupPlanFromTemplateAsync(array $args = [])
 * @method \ILABAmazon\Result getBackupSelection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBackupSelectionAsync(array $args = [])
 * @method \ILABAmazon\Result getBackupVaultAccessPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBackupVaultAccessPolicyAsync(array $args = [])
 * @method \ILABAmazon\Result getBackupVaultNotifications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBackupVaultNotificationsAsync(array $args = [])
 * @method \ILABAmazon\Result getRecoveryPointRestoreMetadata(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRecoveryPointRestoreMetadataAsync(array $args = [])
 * @method \ILABAmazon\Result getSupportedResourceTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSupportedResourceTypesAsync(array $args = [])
 * @method \ILABAmazon\Result listBackupJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBackupJobsAsync(array $args = [])
 * @method \ILABAmazon\Result listBackupPlanTemplates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBackupPlanTemplatesAsync(array $args = [])
 * @method \ILABAmazon\Result listBackupPlanVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBackupPlanVersionsAsync(array $args = [])
 * @method \ILABAmazon\Result listBackupPlans(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBackupPlansAsync(array $args = [])
 * @method \ILABAmazon\Result listBackupSelections(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBackupSelectionsAsync(array $args = [])
 * @method \ILABAmazon\Result listBackupVaults(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBackupVaultsAsync(array $args = [])
 * @method \ILABAmazon\Result listProtectedResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProtectedResourcesAsync(array $args = [])
 * @method \ILABAmazon\Result listRecoveryPointsByBackupVault(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRecoveryPointsByBackupVaultAsync(array $args = [])
 * @method \ILABAmazon\Result listRecoveryPointsByResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRecoveryPointsByResourceAsync(array $args = [])
 * @method \ILABAmazon\Result listRestoreJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRestoreJobsAsync(array $args = [])
 * @method \ILABAmazon\Result listTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsAsync(array $args = [])
 * @method \ILABAmazon\Result putBackupVaultAccessPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBackupVaultAccessPolicyAsync(array $args = [])
 * @method \ILABAmazon\Result putBackupVaultNotifications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBackupVaultNotificationsAsync(array $args = [])
 * @method \ILABAmazon\Result startBackupJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startBackupJobAsync(array $args = [])
 * @method \ILABAmazon\Result startRestoreJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startRestoreJobAsync(array $args = [])
 * @method \ILABAmazon\Result stopBackupJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopBackupJobAsync(array $args = [])
 * @method \ILABAmazon\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \ILABAmazon\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \ILABAmazon\Result updateBackupPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateBackupPlanAsync(array $args = [])
 * @method \ILABAmazon\Result updateRecoveryPointLifecycle(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRecoveryPointLifecycleAsync(array $args = [])
 */
class BackupClient extends AwsClient {}
