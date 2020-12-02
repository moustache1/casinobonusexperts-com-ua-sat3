<?php
namespace ILABAmazon\CostandUsageReportService;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **AWS Cost and Usage Report Service** service.
 * @method \ILABAmazon\Result deleteReportDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteReportDefinitionAsync(array $args = [])
 * @method \ILABAmazon\Result describeReportDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReportDefinitionsAsync(array $args = [])
 * @method \ILABAmazon\Result putReportDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putReportDefinitionAsync(array $args = [])
 */
class CostandUsageReportServiceClient extends AwsClient {}
