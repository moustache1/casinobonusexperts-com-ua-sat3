<?php
namespace ILABAmazon\AutoScalingPlans;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **AWS Auto Scaling Plans** service.
 * @method \ILABAmazon\Result createScalingPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createScalingPlanAsync(array $args = [])
 * @method \ILABAmazon\Result deleteScalingPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteScalingPlanAsync(array $args = [])
 * @method \ILABAmazon\Result describeScalingPlanResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeScalingPlanResourcesAsync(array $args = [])
 * @method \ILABAmazon\Result describeScalingPlans(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeScalingPlansAsync(array $args = [])
 * @method \ILABAmazon\Result getScalingPlanResourceForecastData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getScalingPlanResourceForecastDataAsync(array $args = [])
 * @method \ILABAmazon\Result updateScalingPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateScalingPlanAsync(array $args = [])
 */
class AutoScalingPlansClient extends AwsClient {}
