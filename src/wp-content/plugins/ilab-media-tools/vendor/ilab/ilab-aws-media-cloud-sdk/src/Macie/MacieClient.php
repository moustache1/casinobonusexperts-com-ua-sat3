<?php
namespace ILABAmazon\Macie;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **Amazon Macie** service.
 * @method \ILABAmazon\Result associateMemberAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateMemberAccountAsync(array $args = [])
 * @method \ILABAmazon\Result associateS3Resources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateS3ResourcesAsync(array $args = [])
 * @method \ILABAmazon\Result disassociateMemberAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateMemberAccountAsync(array $args = [])
 * @method \ILABAmazon\Result disassociateS3Resources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateS3ResourcesAsync(array $args = [])
 * @method \ILABAmazon\Result listMemberAccounts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMemberAccountsAsync(array $args = [])
 * @method \ILABAmazon\Result listS3Resources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listS3ResourcesAsync(array $args = [])
 * @method \ILABAmazon\Result updateS3Resources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateS3ResourcesAsync(array $args = [])
 */
class MacieClient extends AwsClient {}
