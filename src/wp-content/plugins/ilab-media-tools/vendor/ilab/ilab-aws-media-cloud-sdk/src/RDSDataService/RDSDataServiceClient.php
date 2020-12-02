<?php
namespace ILABAmazon\RDSDataService;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **AWS RDS DataService** service.
 * @method \ILABAmazon\Result batchExecuteStatement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchExecuteStatementAsync(array $args = [])
 * @method \ILABAmazon\Result beginTransaction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise beginTransactionAsync(array $args = [])
 * @method \ILABAmazon\Result commitTransaction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise commitTransactionAsync(array $args = [])
 * @method \ILABAmazon\Result executeSql(array $args = [])
 * @method \GuzzleHttp\Promise\Promise executeSqlAsync(array $args = [])
 * @method \ILABAmazon\Result executeStatement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise executeStatementAsync(array $args = [])
 * @method \ILABAmazon\Result rollbackTransaction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rollbackTransactionAsync(array $args = [])
 */
class RDSDataServiceClient extends AwsClient {}
