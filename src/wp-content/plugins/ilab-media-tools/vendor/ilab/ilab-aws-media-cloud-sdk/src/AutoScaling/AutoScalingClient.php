<?php
namespace ILABAmazon\AutoScaling;

use ILABAmazon\AwsClient;

/**
 * Auto Scaling client.
 *
 * @method \ILABAmazon\Result attachInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachInstancesAsync(array $args = [])
 * @method \ILABAmazon\Result attachLoadBalancerTargetGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachLoadBalancerTargetGroupsAsync(array $args = [])
 * @method \ILABAmazon\Result attachLoadBalancers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachLoadBalancersAsync(array $args = [])
 * @method \ILABAmazon\Result batchDeleteScheduledAction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDeleteScheduledActionAsync(array $args = [])
 * @method \ILABAmazon\Result batchPutScheduledUpdateGroupAction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchPutScheduledUpdateGroupActionAsync(array $args = [])
 * @method \ILABAmazon\Result completeLifecycleAction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise completeLifecycleActionAsync(array $args = [])
 * @method \ILABAmazon\Result createAutoScalingGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAutoScalingGroupAsync(array $args = [])
 * @method \ILABAmazon\Result createLaunchConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLaunchConfigurationAsync(array $args = [])
 * @method \ILABAmazon\Result createOrUpdateTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createOrUpdateTagsAsync(array $args = [])
 * @method \ILABAmazon\Result deleteAutoScalingGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAutoScalingGroupAsync(array $args = [])
 * @method \ILABAmazon\Result deleteLaunchConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLaunchConfigurationAsync(array $args = [])
 * @method \ILABAmazon\Result deleteLifecycleHook(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLifecycleHookAsync(array $args = [])
 * @method \ILABAmazon\Result deleteNotificationConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteNotificationConfigurationAsync(array $args = [])
 * @method \ILABAmazon\Result deletePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePolicyAsync(array $args = [])
 * @method \ILABAmazon\Result deleteScheduledAction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteScheduledActionAsync(array $args = [])
 * @method \ILABAmazon\Result deleteTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTagsAsync(array $args = [])
 * @method \ILABAmazon\Result describeAccountLimits(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAccountLimitsAsync(array $args = [])
 * @method \ILABAmazon\Result describeAdjustmentTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAdjustmentTypesAsync(array $args = [])
 * @method \ILABAmazon\Result describeAutoScalingGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAutoScalingGroupsAsync(array $args = [])
 * @method \ILABAmazon\Result describeAutoScalingInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAutoScalingInstancesAsync(array $args = [])
 * @method \ILABAmazon\Result describeAutoScalingNotificationTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAutoScalingNotificationTypesAsync(array $args = [])
 * @method \ILABAmazon\Result describeLaunchConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLaunchConfigurationsAsync(array $args = [])
 * @method \ILABAmazon\Result describeLifecycleHookTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLifecycleHookTypesAsync(array $args = [])
 * @method \ILABAmazon\Result describeLifecycleHooks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLifecycleHooksAsync(array $args = [])
 * @method \ILABAmazon\Result describeLoadBalancerTargetGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLoadBalancerTargetGroupsAsync(array $args = [])
 * @method \ILABAmazon\Result describeLoadBalancers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLoadBalancersAsync(array $args = [])
 * @method \ILABAmazon\Result describeMetricCollectionTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMetricCollectionTypesAsync(array $args = [])
 * @method \ILABAmazon\Result describeNotificationConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNotificationConfigurationsAsync(array $args = [])
 * @method \ILABAmazon\Result describePolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePoliciesAsync(array $args = [])
 * @method \ILABAmazon\Result describeScalingActivities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeScalingActivitiesAsync(array $args = [])
 * @method \ILABAmazon\Result describeScalingProcessTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeScalingProcessTypesAsync(array $args = [])
 * @method \ILABAmazon\Result describeScheduledActions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeScheduledActionsAsync(array $args = [])
 * @method \ILABAmazon\Result describeTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTagsAsync(array $args = [])
 * @method \ILABAmazon\Result describeTerminationPolicyTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTerminationPolicyTypesAsync(array $args = [])
 * @method \ILABAmazon\Result detachInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachInstancesAsync(array $args = [])
 * @method \ILABAmazon\Result detachLoadBalancerTargetGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachLoadBalancerTargetGroupsAsync(array $args = [])
 * @method \ILABAmazon\Result detachLoadBalancers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachLoadBalancersAsync(array $args = [])
 * @method \ILABAmazon\Result disableMetricsCollection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableMetricsCollectionAsync(array $args = [])
 * @method \ILABAmazon\Result enableMetricsCollection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableMetricsCollectionAsync(array $args = [])
 * @method \ILABAmazon\Result enterStandby(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enterStandbyAsync(array $args = [])
 * @method \ILABAmazon\Result executePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise executePolicyAsync(array $args = [])
 * @method \ILABAmazon\Result exitStandby(array $args = [])
 * @method \GuzzleHttp\Promise\Promise exitStandbyAsync(array $args = [])
 * @method \ILABAmazon\Result putLifecycleHook(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putLifecycleHookAsync(array $args = [])
 * @method \ILABAmazon\Result putNotificationConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putNotificationConfigurationAsync(array $args = [])
 * @method \ILABAmazon\Result putScalingPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putScalingPolicyAsync(array $args = [])
 * @method \ILABAmazon\Result putScheduledUpdateGroupAction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putScheduledUpdateGroupActionAsync(array $args = [])
 * @method \ILABAmazon\Result recordLifecycleActionHeartbeat(array $args = [])
 * @method \GuzzleHttp\Promise\Promise recordLifecycleActionHeartbeatAsync(array $args = [])
 * @method \ILABAmazon\Result resumeProcesses(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resumeProcessesAsync(array $args = [])
 * @method \ILABAmazon\Result setDesiredCapacity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setDesiredCapacityAsync(array $args = [])
 * @method \ILABAmazon\Result setInstanceHealth(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setInstanceHealthAsync(array $args = [])
 * @method \ILABAmazon\Result setInstanceProtection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setInstanceProtectionAsync(array $args = [])
 * @method \ILABAmazon\Result suspendProcesses(array $args = [])
 * @method \GuzzleHttp\Promise\Promise suspendProcessesAsync(array $args = [])
 * @method \ILABAmazon\Result terminateInstanceInAutoScalingGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise terminateInstanceInAutoScalingGroupAsync(array $args = [])
 * @method \ILABAmazon\Result updateAutoScalingGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAutoScalingGroupAsync(array $args = [])
 */
class AutoScalingClient extends AwsClient {}
