<?php
namespace ILABAmazon\Athena;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **Amazon Athena** service.
 * @method \ILABAmazon\Result batchGetNamedQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetNamedQueryAsync(array $args = [])
 * @method \ILABAmazon\Result batchGetQueryExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetQueryExecutionAsync(array $args = [])
 * @method \ILABAmazon\Result createNamedQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createNamedQueryAsync(array $args = [])
 * @method \ILABAmazon\Result createWorkGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createWorkGroupAsync(array $args = [])
 * @method \ILABAmazon\Result deleteNamedQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteNamedQueryAsync(array $args = [])
 * @method \ILABAmazon\Result deleteWorkGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteWorkGroupAsync(array $args = [])
 * @method \ILABAmazon\Result getNamedQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getNamedQueryAsync(array $args = [])
 * @method \ILABAmazon\Result getQueryExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getQueryExecutionAsync(array $args = [])
 * @method \ILABAmazon\Result getQueryResults(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getQueryResultsAsync(array $args = [])
 * @method \ILABAmazon\Result getWorkGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getWorkGroupAsync(array $args = [])
 * @method \ILABAmazon\Result listNamedQueries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listNamedQueriesAsync(array $args = [])
 * @method \ILABAmazon\Result listQueryExecutions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listQueryExecutionsAsync(array $args = [])
 * @method \ILABAmazon\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \ILABAmazon\Result listWorkGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listWorkGroupsAsync(array $args = [])
 * @method \ILABAmazon\Result startQueryExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startQueryExecutionAsync(array $args = [])
 * @method \ILABAmazon\Result stopQueryExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopQueryExecutionAsync(array $args = [])
 * @method \ILABAmazon\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \ILABAmazon\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \ILABAmazon\Result updateWorkGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateWorkGroupAsync(array $args = [])
 */
class AthenaClient extends AwsClient {}
