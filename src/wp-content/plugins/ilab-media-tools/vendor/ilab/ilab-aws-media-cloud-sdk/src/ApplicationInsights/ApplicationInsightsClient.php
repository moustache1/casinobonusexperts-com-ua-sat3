<?php
namespace ILABAmazon\ApplicationInsights;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **Amazon CloudWatch Application Insights** service.
 * @method \ILABAmazon\Result createApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createApplicationAsync(array $args = [])
 * @method \ILABAmazon\Result createComponent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createComponentAsync(array $args = [])
 * @method \ILABAmazon\Result deleteApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteApplicationAsync(array $args = [])
 * @method \ILABAmazon\Result deleteComponent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteComponentAsync(array $args = [])
 * @method \ILABAmazon\Result describeApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeApplicationAsync(array $args = [])
 * @method \ILABAmazon\Result describeComponent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeComponentAsync(array $args = [])
 * @method \ILABAmazon\Result describeComponentConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeComponentConfigurationAsync(array $args = [])
 * @method \ILABAmazon\Result describeComponentConfigurationRecommendation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeComponentConfigurationRecommendationAsync(array $args = [])
 * @method \ILABAmazon\Result describeObservation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeObservationAsync(array $args = [])
 * @method \ILABAmazon\Result describeProblem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProblemAsync(array $args = [])
 * @method \ILABAmazon\Result describeProblemObservations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProblemObservationsAsync(array $args = [])
 * @method \ILABAmazon\Result listApplications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listApplicationsAsync(array $args = [])
 * @method \ILABAmazon\Result listComponents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listComponentsAsync(array $args = [])
 * @method \ILABAmazon\Result listProblems(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProblemsAsync(array $args = [])
 * @method \ILABAmazon\Result updateComponent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateComponentAsync(array $args = [])
 * @method \ILABAmazon\Result updateComponentConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateComponentConfigurationAsync(array $args = [])
 */
class ApplicationInsightsClient extends AwsClient {}
