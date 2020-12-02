<?php
namespace ILABAmazon\Lambda;

use ILABAmazon\AwsClient;
use ILABAmazon\CommandInterface;
use ILABAmazon\Middleware;

/**
 * This client is used to interact with AWS Lambda
 *
 * @method \ILABAmazon\Result addLayerVersionPermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addLayerVersionPermissionAsync(array $args = [])
 * @method \ILABAmazon\Result addPermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addPermissionAsync(array $args = [])
 * @method \ILABAmazon\Result createAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAliasAsync(array $args = [])
 * @method \ILABAmazon\Result createEventSourceMapping(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createEventSourceMappingAsync(array $args = [])
 * @method \ILABAmazon\Result createFunction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFunctionAsync(array $args = [])
 * @method \ILABAmazon\Result deleteAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAliasAsync(array $args = [])
 * @method \ILABAmazon\Result deleteEventSourceMapping(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEventSourceMappingAsync(array $args = [])
 * @method \ILABAmazon\Result deleteFunction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFunctionAsync(array $args = [])
 * @method \ILABAmazon\Result deleteFunctionConcurrency(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFunctionConcurrencyAsync(array $args = [])
 * @method \ILABAmazon\Result deleteLayerVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLayerVersionAsync(array $args = [])
 * @method \ILABAmazon\Result getAccountSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccountSettingsAsync(array $args = [])
 * @method \ILABAmazon\Result getAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAliasAsync(array $args = [])
 * @method \ILABAmazon\Result getEventSourceMapping(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getEventSourceMappingAsync(array $args = [])
 * @method \ILABAmazon\Result getFunction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFunctionAsync(array $args = [])
 * @method \ILABAmazon\Result getFunctionConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFunctionConfigurationAsync(array $args = [])
 * @method \ILABAmazon\Result getLayerVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLayerVersionAsync(array $args = [])
 * @method \ILABAmazon\Result getLayerVersionByArn(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLayerVersionByArnAsync(array $args = [])
 * @method \ILABAmazon\Result getLayerVersionPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLayerVersionPolicyAsync(array $args = [])
 * @method \ILABAmazon\Result getPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPolicyAsync(array $args = [])
 * @method \ILABAmazon\Result invoke(array $args = [])
 * @method \GuzzleHttp\Promise\Promise invokeAsync(array $args = [])
 * @method \ILABAmazon\Result invokeAsync(array $args = [])
 * @method \GuzzleHttp\Promise\Promise invokeAsyncAsync(array $args = [])
 * @method \ILABAmazon\Result listAliases(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAliasesAsync(array $args = [])
 * @method \ILABAmazon\Result listEventSourceMappings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEventSourceMappingsAsync(array $args = [])
 * @method \ILABAmazon\Result listFunctions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFunctionsAsync(array $args = [])
 * @method \ILABAmazon\Result listLayerVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLayerVersionsAsync(array $args = [])
 * @method \ILABAmazon\Result listLayers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLayersAsync(array $args = [])
 * @method \ILABAmazon\Result listTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsAsync(array $args = [])
 * @method \ILABAmazon\Result listVersionsByFunction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listVersionsByFunctionAsync(array $args = [])
 * @method \ILABAmazon\Result publishLayerVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise publishLayerVersionAsync(array $args = [])
 * @method \ILABAmazon\Result publishVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise publishVersionAsync(array $args = [])
 * @method \ILABAmazon\Result putFunctionConcurrency(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putFunctionConcurrencyAsync(array $args = [])
 * @method \ILABAmazon\Result removeLayerVersionPermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeLayerVersionPermissionAsync(array $args = [])
 * @method \ILABAmazon\Result removePermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removePermissionAsync(array $args = [])
 * @method \ILABAmazon\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \ILABAmazon\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \ILABAmazon\Result updateAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAliasAsync(array $args = [])
 * @method \ILABAmazon\Result updateEventSourceMapping(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateEventSourceMappingAsync(array $args = [])
 * @method \ILABAmazon\Result updateFunctionCode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFunctionCodeAsync(array $args = [])
 * @method \ILABAmazon\Result updateFunctionConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFunctionConfigurationAsync(array $args = [])
 */
class LambdaClient extends AwsClient
{
    /**
     * {@inheritdoc}
     */
    public function __construct(array $args)
    {
        parent::__construct($args);
        $list = $this->getHandlerList();
        if (extension_loaded('curl')) {
            $list->appendInit($this->getDefaultCurlOptionsMiddleware());
        }
    }

    /**
     * Provides a middleware that sets default Curl options for the command
     *
     * @return callable
     */
    public function getDefaultCurlOptionsMiddleware()
    {
        return Middleware::mapCommand(function (CommandInterface $cmd) {
            $defaultCurlOptions = [
                CURLOPT_TCP_KEEPALIVE => 1,
            ];
            if (!isset($cmd['@http']['curl'])) {
                $cmd['@http']['curl'] = $defaultCurlOptions;
            } else {
                $cmd['@http']['curl'] += $defaultCurlOptions;
            }
            return $cmd;
        });
    }
}
