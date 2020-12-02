<?php
namespace ILABAmazon\Shield;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **AWS Shield** service.
 * @method \ILABAmazon\Result associateDRTLogBucket(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateDRTLogBucketAsync(array $args = [])
 * @method \ILABAmazon\Result associateDRTRole(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateDRTRoleAsync(array $args = [])
 * @method \ILABAmazon\Result createProtection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProtectionAsync(array $args = [])
 * @method \ILABAmazon\Result createSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSubscriptionAsync(array $args = [])
 * @method \ILABAmazon\Result deleteProtection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProtectionAsync(array $args = [])
 * @method \ILABAmazon\Result deleteSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSubscriptionAsync(array $args = [])
 * @method \ILABAmazon\Result describeAttack(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAttackAsync(array $args = [])
 * @method \ILABAmazon\Result describeDRTAccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDRTAccessAsync(array $args = [])
 * @method \ILABAmazon\Result describeEmergencyContactSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEmergencyContactSettingsAsync(array $args = [])
 * @method \ILABAmazon\Result describeProtection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProtectionAsync(array $args = [])
 * @method \ILABAmazon\Result describeSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSubscriptionAsync(array $args = [])
 * @method \ILABAmazon\Result disassociateDRTLogBucket(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateDRTLogBucketAsync(array $args = [])
 * @method \ILABAmazon\Result disassociateDRTRole(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateDRTRoleAsync(array $args = [])
 * @method \ILABAmazon\Result getSubscriptionState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSubscriptionStateAsync(array $args = [])
 * @method \ILABAmazon\Result listAttacks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAttacksAsync(array $args = [])
 * @method \ILABAmazon\Result listProtections(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProtectionsAsync(array $args = [])
 * @method \ILABAmazon\Result updateEmergencyContactSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateEmergencyContactSettingsAsync(array $args = [])
 * @method \ILABAmazon\Result updateSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSubscriptionAsync(array $args = [])
 */
class ShieldClient extends AwsClient {}
