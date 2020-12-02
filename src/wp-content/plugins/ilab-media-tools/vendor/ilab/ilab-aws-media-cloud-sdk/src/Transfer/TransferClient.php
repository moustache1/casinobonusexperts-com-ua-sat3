<?php
namespace ILABAmazon\Transfer;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **AWS Transfer for SFTP** service.
 * @method \ILABAmazon\Result createServer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createServerAsync(array $args = [])
 * @method \ILABAmazon\Result createUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUserAsync(array $args = [])
 * @method \ILABAmazon\Result deleteServer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteServerAsync(array $args = [])
 * @method \ILABAmazon\Result deleteSshPublicKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSshPublicKeyAsync(array $args = [])
 * @method \ILABAmazon\Result deleteUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUserAsync(array $args = [])
 * @method \ILABAmazon\Result describeServer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeServerAsync(array $args = [])
 * @method \ILABAmazon\Result describeUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUserAsync(array $args = [])
 * @method \ILABAmazon\Result importSshPublicKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importSshPublicKeyAsync(array $args = [])
 * @method \ILABAmazon\Result listServers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listServersAsync(array $args = [])
 * @method \ILABAmazon\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \ILABAmazon\Result listUsers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listUsersAsync(array $args = [])
 * @method \ILABAmazon\Result startServer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startServerAsync(array $args = [])
 * @method \ILABAmazon\Result stopServer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopServerAsync(array $args = [])
 * @method \ILABAmazon\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \ILABAmazon\Result testIdentityProvider(array $args = [])
 * @method \GuzzleHttp\Promise\Promise testIdentityProviderAsync(array $args = [])
 * @method \ILABAmazon\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \ILABAmazon\Result updateServer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateServerAsync(array $args = [])
 * @method \ILABAmazon\Result updateUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateUserAsync(array $args = [])
 */
class TransferClient extends AwsClient {}
