<?php
namespace ILABAmazon\CognitoIdentity;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **Amazon Cognito Identity** service.
 *
 * @method \ILABAmazon\Result createIdentityPool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createIdentityPoolAsync(array $args = [])
 * @method \ILABAmazon\Result deleteIdentities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteIdentitiesAsync(array $args = [])
 * @method \ILABAmazon\Result deleteIdentityPool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteIdentityPoolAsync(array $args = [])
 * @method \ILABAmazon\Result describeIdentity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIdentityAsync(array $args = [])
 * @method \ILABAmazon\Result describeIdentityPool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIdentityPoolAsync(array $args = [])
 * @method \ILABAmazon\Result getCredentialsForIdentity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCredentialsForIdentityAsync(array $args = [])
 * @method \ILABAmazon\Result getId(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIdAsync(array $args = [])
 * @method \ILABAmazon\Result getIdentityPoolRoles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIdentityPoolRolesAsync(array $args = [])
 * @method \ILABAmazon\Result getOpenIdToken(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getOpenIdTokenAsync(array $args = [])
 * @method \ILABAmazon\Result getOpenIdTokenForDeveloperIdentity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getOpenIdTokenForDeveloperIdentityAsync(array $args = [])
 * @method \ILABAmazon\Result listIdentities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listIdentitiesAsync(array $args = [])
 * @method \ILABAmazon\Result listIdentityPools(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listIdentityPoolsAsync(array $args = [])
 * @method \ILABAmazon\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \ILABAmazon\Result lookupDeveloperIdentity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise lookupDeveloperIdentityAsync(array $args = [])
 * @method \ILABAmazon\Result mergeDeveloperIdentities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise mergeDeveloperIdentitiesAsync(array $args = [])
 * @method \ILABAmazon\Result setIdentityPoolRoles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setIdentityPoolRolesAsync(array $args = [])
 * @method \ILABAmazon\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \ILABAmazon\Result unlinkDeveloperIdentity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise unlinkDeveloperIdentityAsync(array $args = [])
 * @method \ILABAmazon\Result unlinkIdentity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise unlinkIdentityAsync(array $args = [])
 * @method \ILABAmazon\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \ILABAmazon\Result updateIdentityPool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateIdentityPoolAsync(array $args = [])
 */
class CognitoIdentityClient extends AwsClient {}
