<?php
namespace ILABAmazon\Greengrass;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **AWS Greengrass** service.
 * @method \ILABAmazon\Result associateRoleToGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateRoleToGroupAsync(array $args = [])
 * @method \ILABAmazon\Result associateServiceRoleToAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateServiceRoleToAccountAsync(array $args = [])
 * @method \ILABAmazon\Result createConnectorDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createConnectorDefinitionAsync(array $args = [])
 * @method \ILABAmazon\Result createConnectorDefinitionVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createConnectorDefinitionVersionAsync(array $args = [])
 * @method \ILABAmazon\Result createCoreDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCoreDefinitionAsync(array $args = [])
 * @method \ILABAmazon\Result createCoreDefinitionVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCoreDefinitionVersionAsync(array $args = [])
 * @method \ILABAmazon\Result createDeployment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDeploymentAsync(array $args = [])
 * @method \ILABAmazon\Result createDeviceDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDeviceDefinitionAsync(array $args = [])
 * @method \ILABAmazon\Result createDeviceDefinitionVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDeviceDefinitionVersionAsync(array $args = [])
 * @method \ILABAmazon\Result createFunctionDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFunctionDefinitionAsync(array $args = [])
 * @method \ILABAmazon\Result createFunctionDefinitionVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFunctionDefinitionVersionAsync(array $args = [])
 * @method \ILABAmazon\Result createGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGroupAsync(array $args = [])
 * @method \ILABAmazon\Result createGroupCertificateAuthority(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGroupCertificateAuthorityAsync(array $args = [])
 * @method \ILABAmazon\Result createGroupVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGroupVersionAsync(array $args = [])
 * @method \ILABAmazon\Result createLoggerDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLoggerDefinitionAsync(array $args = [])
 * @method \ILABAmazon\Result createLoggerDefinitionVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLoggerDefinitionVersionAsync(array $args = [])
 * @method \ILABAmazon\Result createResourceDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createResourceDefinitionAsync(array $args = [])
 * @method \ILABAmazon\Result createResourceDefinitionVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createResourceDefinitionVersionAsync(array $args = [])
 * @method \ILABAmazon\Result createSoftwareUpdateJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSoftwareUpdateJobAsync(array $args = [])
 * @method \ILABAmazon\Result createSubscriptionDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSubscriptionDefinitionAsync(array $args = [])
 * @method \ILABAmazon\Result createSubscriptionDefinitionVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSubscriptionDefinitionVersionAsync(array $args = [])
 * @method \ILABAmazon\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \ILABAmazon\Result deleteConnectorDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConnectorDefinitionAsync(array $args = [])
 * @method \ILABAmazon\Result deleteCoreDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCoreDefinitionAsync(array $args = [])
 * @method \ILABAmazon\Result deleteDeviceDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDeviceDefinitionAsync(array $args = [])
 * @method \ILABAmazon\Result deleteFunctionDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFunctionDefinitionAsync(array $args = [])
 * @method \ILABAmazon\Result deleteGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteGroupAsync(array $args = [])
 * @method \ILABAmazon\Result deleteLoggerDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLoggerDefinitionAsync(array $args = [])
 * @method \ILABAmazon\Result deleteResourceDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteResourceDefinitionAsync(array $args = [])
 * @method \ILABAmazon\Result deleteSubscriptionDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSubscriptionDefinitionAsync(array $args = [])
 * @method \ILABAmazon\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \ILABAmazon\Result disassociateRoleFromGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateRoleFromGroupAsync(array $args = [])
 * @method \ILABAmazon\Result disassociateServiceRoleFromAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateServiceRoleFromAccountAsync(array $args = [])
 * @method \ILABAmazon\Result getAssociatedRole(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAssociatedRoleAsync(array $args = [])
 * @method \ILABAmazon\Result getBulkDeploymentStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBulkDeploymentStatusAsync(array $args = [])
 * @method \ILABAmazon\Result getConnectivityInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getConnectivityInfoAsync(array $args = [])
 * @method \ILABAmazon\Result getConnectorDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getConnectorDefinitionAsync(array $args = [])
 * @method \ILABAmazon\Result getConnectorDefinitionVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getConnectorDefinitionVersionAsync(array $args = [])
 * @method \ILABAmazon\Result getCoreDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCoreDefinitionAsync(array $args = [])
 * @method \ILABAmazon\Result getCoreDefinitionVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCoreDefinitionVersionAsync(array $args = [])
 * @method \ILABAmazon\Result getDeploymentStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeploymentStatusAsync(array $args = [])
 * @method \ILABAmazon\Result getDeviceDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeviceDefinitionAsync(array $args = [])
 * @method \ILABAmazon\Result getDeviceDefinitionVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeviceDefinitionVersionAsync(array $args = [])
 * @method \ILABAmazon\Result getFunctionDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFunctionDefinitionAsync(array $args = [])
 * @method \ILABAmazon\Result getFunctionDefinitionVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFunctionDefinitionVersionAsync(array $args = [])
 * @method \ILABAmazon\Result getGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGroupAsync(array $args = [])
 * @method \ILABAmazon\Result getGroupCertificateAuthority(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGroupCertificateAuthorityAsync(array $args = [])
 * @method \ILABAmazon\Result getGroupCertificateConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGroupCertificateConfigurationAsync(array $args = [])
 * @method \ILABAmazon\Result getGroupVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGroupVersionAsync(array $args = [])
 * @method \ILABAmazon\Result getLoggerDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLoggerDefinitionAsync(array $args = [])
 * @method \ILABAmazon\Result getLoggerDefinitionVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLoggerDefinitionVersionAsync(array $args = [])
 * @method \ILABAmazon\Result getResourceDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourceDefinitionAsync(array $args = [])
 * @method \ILABAmazon\Result getResourceDefinitionVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourceDefinitionVersionAsync(array $args = [])
 * @method \ILABAmazon\Result getServiceRoleForAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getServiceRoleForAccountAsync(array $args = [])
 * @method \ILABAmazon\Result getSubscriptionDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSubscriptionDefinitionAsync(array $args = [])
 * @method \ILABAmazon\Result getSubscriptionDefinitionVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSubscriptionDefinitionVersionAsync(array $args = [])
 * @method \ILABAmazon\Result listBulkDeploymentDetailedReports(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBulkDeploymentDetailedReportsAsync(array $args = [])
 * @method \ILABAmazon\Result listBulkDeployments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBulkDeploymentsAsync(array $args = [])
 * @method \ILABAmazon\Result listConnectorDefinitionVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listConnectorDefinitionVersionsAsync(array $args = [])
 * @method \ILABAmazon\Result listConnectorDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listConnectorDefinitionsAsync(array $args = [])
 * @method \ILABAmazon\Result listCoreDefinitionVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCoreDefinitionVersionsAsync(array $args = [])
 * @method \ILABAmazon\Result listCoreDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCoreDefinitionsAsync(array $args = [])
 * @method \ILABAmazon\Result listDeployments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDeploymentsAsync(array $args = [])
 * @method \ILABAmazon\Result listDeviceDefinitionVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDeviceDefinitionVersionsAsync(array $args = [])
 * @method \ILABAmazon\Result listDeviceDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDeviceDefinitionsAsync(array $args = [])
 * @method \ILABAmazon\Result listFunctionDefinitionVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFunctionDefinitionVersionsAsync(array $args = [])
 * @method \ILABAmazon\Result listFunctionDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFunctionDefinitionsAsync(array $args = [])
 * @method \ILABAmazon\Result listGroupCertificateAuthorities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGroupCertificateAuthoritiesAsync(array $args = [])
 * @method \ILABAmazon\Result listGroupVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGroupVersionsAsync(array $args = [])
 * @method \ILABAmazon\Result listGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGroupsAsync(array $args = [])
 * @method \ILABAmazon\Result listLoggerDefinitionVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLoggerDefinitionVersionsAsync(array $args = [])
 * @method \ILABAmazon\Result listLoggerDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLoggerDefinitionsAsync(array $args = [])
 * @method \ILABAmazon\Result listResourceDefinitionVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResourceDefinitionVersionsAsync(array $args = [])
 * @method \ILABAmazon\Result listResourceDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResourceDefinitionsAsync(array $args = [])
 * @method \ILABAmazon\Result listSubscriptionDefinitionVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSubscriptionDefinitionVersionsAsync(array $args = [])
 * @method \ILABAmazon\Result listSubscriptionDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSubscriptionDefinitionsAsync(array $args = [])
 * @method \ILABAmazon\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \ILABAmazon\Result resetDeployments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resetDeploymentsAsync(array $args = [])
 * @method \ILABAmazon\Result startBulkDeployment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startBulkDeploymentAsync(array $args = [])
 * @method \ILABAmazon\Result stopBulkDeployment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopBulkDeploymentAsync(array $args = [])
 * @method \ILABAmazon\Result updateConnectivityInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateConnectivityInfoAsync(array $args = [])
 * @method \ILABAmazon\Result updateConnectorDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateConnectorDefinitionAsync(array $args = [])
 * @method \ILABAmazon\Result updateCoreDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateCoreDefinitionAsync(array $args = [])
 * @method \ILABAmazon\Result updateDeviceDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDeviceDefinitionAsync(array $args = [])
 * @method \ILABAmazon\Result updateFunctionDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFunctionDefinitionAsync(array $args = [])
 * @method \ILABAmazon\Result updateGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGroupAsync(array $args = [])
 * @method \ILABAmazon\Result updateGroupCertificateConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGroupCertificateConfigurationAsync(array $args = [])
 * @method \ILABAmazon\Result updateLoggerDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateLoggerDefinitionAsync(array $args = [])
 * @method \ILABAmazon\Result updateResourceDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateResourceDefinitionAsync(array $args = [])
 * @method \ILABAmazon\Result updateSubscriptionDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSubscriptionDefinitionAsync(array $args = [])
 */
class GreengrassClient extends AwsClient {}
