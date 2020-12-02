<?php
namespace ILABAmazon\XRay;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **AWS X-Ray** service.
 * @method \ILABAmazon\Result batchGetTraces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetTracesAsync(array $args = [])
 * @method \ILABAmazon\Result createGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGroupAsync(array $args = [])
 * @method \ILABAmazon\Result createSamplingRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSamplingRuleAsync(array $args = [])
 * @method \ILABAmazon\Result deleteGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteGroupAsync(array $args = [])
 * @method \ILABAmazon\Result deleteSamplingRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSamplingRuleAsync(array $args = [])
 * @method \ILABAmazon\Result getEncryptionConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getEncryptionConfigAsync(array $args = [])
 * @method \ILABAmazon\Result getGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGroupAsync(array $args = [])
 * @method \ILABAmazon\Result getGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGroupsAsync(array $args = [])
 * @method \ILABAmazon\Result getSamplingRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSamplingRulesAsync(array $args = [])
 * @method \ILABAmazon\Result getSamplingStatisticSummaries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSamplingStatisticSummariesAsync(array $args = [])
 * @method \ILABAmazon\Result getSamplingTargets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSamplingTargetsAsync(array $args = [])
 * @method \ILABAmazon\Result getServiceGraph(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getServiceGraphAsync(array $args = [])
 * @method \ILABAmazon\Result getTimeSeriesServiceStatistics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTimeSeriesServiceStatisticsAsync(array $args = [])
 * @method \ILABAmazon\Result getTraceGraph(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTraceGraphAsync(array $args = [])
 * @method \ILABAmazon\Result getTraceSummaries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTraceSummariesAsync(array $args = [])
 * @method \ILABAmazon\Result putEncryptionConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putEncryptionConfigAsync(array $args = [])
 * @method \ILABAmazon\Result putTelemetryRecords(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putTelemetryRecordsAsync(array $args = [])
 * @method \ILABAmazon\Result putTraceSegments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putTraceSegmentsAsync(array $args = [])
 * @method \ILABAmazon\Result updateGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGroupAsync(array $args = [])
 * @method \ILABAmazon\Result updateSamplingRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSamplingRuleAsync(array $args = [])
 */
class XRayClient extends AwsClient {}
