<?php
namespace ILABAmazon;

/**
 * Builds AWS clients based on configuration settings.
 *
 * @method \ILABAmazon\ACMPCA\ACMPCAClient createACMPCA(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionACMPCA(array $args = [])
 * @method \ILABAmazon\Acm\AcmClient createAcm(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionAcm(array $args = [])
 * @method \ILABAmazon\AlexaForBusiness\AlexaForBusinessClient createAlexaForBusiness(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionAlexaForBusiness(array $args = [])
 * @method \ILABAmazon\Amplify\AmplifyClient createAmplify(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionAmplify(array $args = [])
 * @method \ILABAmazon\ApiGateway\ApiGatewayClient createApiGateway(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionApiGateway(array $args = [])
 * @method \ILABAmazon\ApiGatewayManagementApi\ApiGatewayManagementApiClient createApiGatewayManagementApi(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionApiGatewayManagementApi(array $args = [])
 * @method \ILABAmazon\ApiGatewayV2\ApiGatewayV2Client createApiGatewayV2(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionApiGatewayV2(array $args = [])
 * @method \ILABAmazon\AppMesh\AppMeshClient createAppMesh(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionAppMesh(array $args = [])
 * @method \ILABAmazon\AppSync\AppSyncClient createAppSync(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionAppSync(array $args = [])
 * @method \ILABAmazon\ApplicationAutoScaling\ApplicationAutoScalingClient createApplicationAutoScaling(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionApplicationAutoScaling(array $args = [])
 * @method \ILABAmazon\ApplicationDiscoveryService\ApplicationDiscoveryServiceClient createApplicationDiscoveryService(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionApplicationDiscoveryService(array $args = [])
 * @method \ILABAmazon\ApplicationInsights\ApplicationInsightsClient createApplicationInsights(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionApplicationInsights(array $args = [])
 * @method \ILABAmazon\Appstream\AppstreamClient createAppstream(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionAppstream(array $args = [])
 * @method \ILABAmazon\Athena\AthenaClient createAthena(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionAthena(array $args = [])
 * @method \ILABAmazon\AutoScaling\AutoScalingClient createAutoScaling(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionAutoScaling(array $args = [])
 * @method \ILABAmazon\AutoScalingPlans\AutoScalingPlansClient createAutoScalingPlans(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionAutoScalingPlans(array $args = [])
 * @method \ILABAmazon\Backup\BackupClient createBackup(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionBackup(array $args = [])
 * @method \ILABAmazon\Batch\BatchClient createBatch(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionBatch(array $args = [])
 * @method \ILABAmazon\Budgets\BudgetsClient createBudgets(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionBudgets(array $args = [])
 * @method \ILABAmazon\Chime\ChimeClient createChime(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionChime(array $args = [])
 * @method \ILABAmazon\Cloud9\Cloud9Client createCloud9(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionCloud9(array $args = [])
 * @method \ILABAmazon\CloudDirectory\CloudDirectoryClient createCloudDirectory(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionCloudDirectory(array $args = [])
 * @method \ILABAmazon\CloudFormation\CloudFormationClient createCloudFormation(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionCloudFormation(array $args = [])
 * @method \ILABAmazon\CloudFront\CloudFrontClient createCloudFront(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionCloudFront(array $args = [])
 * @method \ILABAmazon\CloudHSMV2\CloudHSMV2Client createCloudHSMV2(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionCloudHSMV2(array $args = [])
 * @method \ILABAmazon\CloudHsm\CloudHsmClient createCloudHsm(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionCloudHsm(array $args = [])
 * @method \ILABAmazon\CloudSearch\CloudSearchClient createCloudSearch(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionCloudSearch(array $args = [])
 * @method \ILABAmazon\CloudSearchDomain\CloudSearchDomainClient createCloudSearchDomain(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionCloudSearchDomain(array $args = [])
 * @method \ILABAmazon\CloudTrail\CloudTrailClient createCloudTrail(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionCloudTrail(array $args = [])
 * @method \ILABAmazon\CloudWatch\CloudWatchClient createCloudWatch(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionCloudWatch(array $args = [])
 * @method \ILABAmazon\CloudWatchEvents\CloudWatchEventsClient createCloudWatchEvents(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionCloudWatchEvents(array $args = [])
 * @method \ILABAmazon\CloudWatchLogs\CloudWatchLogsClient createCloudWatchLogs(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionCloudWatchLogs(array $args = [])
 * @method \ILABAmazon\CodeBuild\CodeBuildClient createCodeBuild(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionCodeBuild(array $args = [])
 * @method \ILABAmazon\CodeCommit\CodeCommitClient createCodeCommit(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionCodeCommit(array $args = [])
 * @method \ILABAmazon\CodeDeploy\CodeDeployClient createCodeDeploy(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionCodeDeploy(array $args = [])
 * @method \ILABAmazon\CodePipeline\CodePipelineClient createCodePipeline(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionCodePipeline(array $args = [])
 * @method \ILABAmazon\CodeStar\CodeStarClient createCodeStar(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionCodeStar(array $args = [])
 * @method \ILABAmazon\CognitoIdentity\CognitoIdentityClient createCognitoIdentity(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionCognitoIdentity(array $args = [])
 * @method \ILABAmazon\CognitoIdentityProvider\CognitoIdentityProviderClient createCognitoIdentityProvider(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionCognitoIdentityProvider(array $args = [])
 * @method \ILABAmazon\CognitoSync\CognitoSyncClient createCognitoSync(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionCognitoSync(array $args = [])
 * @method \ILABAmazon\Comprehend\ComprehendClient createComprehend(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionComprehend(array $args = [])
 * @method \ILABAmazon\ComprehendMedical\ComprehendMedicalClient createComprehendMedical(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionComprehendMedical(array $args = [])
 * @method \ILABAmazon\ConfigService\ConfigServiceClient createConfigService(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionConfigService(array $args = [])
 * @method \ILABAmazon\Connect\ConnectClient createConnect(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionConnect(array $args = [])
 * @method \ILABAmazon\CostExplorer\CostExplorerClient createCostExplorer(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionCostExplorer(array $args = [])
 * @method \ILABAmazon\CostandUsageReportService\CostandUsageReportServiceClient createCostandUsageReportService(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionCostandUsageReportService(array $args = [])
 * @method \ILABAmazon\DAX\DAXClient createDAX(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionDAX(array $args = [])
 * @method \ILABAmazon\DLM\DLMClient createDLM(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionDLM(array $args = [])
 * @method \ILABAmazon\DataPipeline\DataPipelineClient createDataPipeline(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionDataPipeline(array $args = [])
 * @method \ILABAmazon\DataSync\DataSyncClient createDataSync(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionDataSync(array $args = [])
 * @method \ILABAmazon\DatabaseMigrationService\DatabaseMigrationServiceClient createDatabaseMigrationService(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionDatabaseMigrationService(array $args = [])
 * @method \ILABAmazon\DeviceFarm\DeviceFarmClient createDeviceFarm(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionDeviceFarm(array $args = [])
 * @method \ILABAmazon\DirectConnect\DirectConnectClient createDirectConnect(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionDirectConnect(array $args = [])
 * @method \ILABAmazon\DirectoryService\DirectoryServiceClient createDirectoryService(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionDirectoryService(array $args = [])
 * @method \ILABAmazon\DocDB\DocDBClient createDocDB(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionDocDB(array $args = [])
 * @method \ILABAmazon\DynamoDb\DynamoDbClient createDynamoDb(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionDynamoDb(array $args = [])
 * @method \ILABAmazon\DynamoDbStreams\DynamoDbStreamsClient createDynamoDbStreams(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionDynamoDbStreams(array $args = [])
 * @method \ILABAmazon\EC2InstanceConnect\EC2InstanceConnectClient createEC2InstanceConnect(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionEC2InstanceConnect(array $args = [])
 * @method \ILABAmazon\EKS\EKSClient createEKS(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionEKS(array $args = [])
 * @method \ILABAmazon\Ec2\Ec2Client createEc2(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionEc2(array $args = [])
 * @method \ILABAmazon\Ecr\EcrClient createEcr(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionEcr(array $args = [])
 * @method \ILABAmazon\Ecs\EcsClient createEcs(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionEcs(array $args = [])
 * @method \ILABAmazon\Efs\EfsClient createEfs(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionEfs(array $args = [])
 * @method \ILABAmazon\ElastiCache\ElastiCacheClient createElastiCache(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionElastiCache(array $args = [])
 * @method \ILABAmazon\ElasticBeanstalk\ElasticBeanstalkClient createElasticBeanstalk(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionElasticBeanstalk(array $args = [])
 * @method \ILABAmazon\ElasticLoadBalancing\ElasticLoadBalancingClient createElasticLoadBalancing(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionElasticLoadBalancing(array $args = [])
 * @method \ILABAmazon\ElasticLoadBalancingV2\ElasticLoadBalancingV2Client createElasticLoadBalancingV2(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionElasticLoadBalancingV2(array $args = [])
 * @method \ILABAmazon\ElasticTranscoder\ElasticTranscoderClient createElasticTranscoder(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionElasticTranscoder(array $args = [])
 * @method \ILABAmazon\ElasticsearchService\ElasticsearchServiceClient createElasticsearchService(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionElasticsearchService(array $args = [])
 * @method \ILABAmazon\Emr\EmrClient createEmr(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionEmr(array $args = [])
 * @method \ILABAmazon\FMS\FMSClient createFMS(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionFMS(array $args = [])
 * @method \ILABAmazon\FSx\FSxClient createFSx(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionFSx(array $args = [])
 * @method \ILABAmazon\Firehose\FirehoseClient createFirehose(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionFirehose(array $args = [])
 * @method \ILABAmazon\GameLift\GameLiftClient createGameLift(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionGameLift(array $args = [])
 * @method \ILABAmazon\Glacier\GlacierClient createGlacier(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionGlacier(array $args = [])
 * @method \ILABAmazon\GlobalAccelerator\GlobalAcceleratorClient createGlobalAccelerator(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionGlobalAccelerator(array $args = [])
 * @method \ILABAmazon\Glue\GlueClient createGlue(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionGlue(array $args = [])
 * @method \ILABAmazon\Greengrass\GreengrassClient createGreengrass(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionGreengrass(array $args = [])
 * @method \ILABAmazon\GroundStation\GroundStationClient createGroundStation(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionGroundStation(array $args = [])
 * @method \ILABAmazon\GuardDuty\GuardDutyClient createGuardDuty(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionGuardDuty(array $args = [])
 * @method \ILABAmazon\Health\HealthClient createHealth(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionHealth(array $args = [])
 * @method \ILABAmazon\Iam\IamClient createIam(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionIam(array $args = [])
 * @method \ILABAmazon\ImportExport\ImportExportClient createImportExport(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionImportExport(array $args = [])
 * @method \ILABAmazon\Inspector\InspectorClient createInspector(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionInspector(array $args = [])
 * @method \ILABAmazon\IoT1ClickDevicesService\IoT1ClickDevicesServiceClient createIoT1ClickDevicesService(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionIoT1ClickDevicesService(array $args = [])
 * @method \ILABAmazon\IoT1ClickProjects\IoT1ClickProjectsClient createIoT1ClickProjects(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionIoT1ClickProjects(array $args = [])
 * @method \ILABAmazon\IoTAnalytics\IoTAnalyticsClient createIoTAnalytics(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionIoTAnalytics(array $args = [])
 * @method \ILABAmazon\IoTEvents\IoTEventsClient createIoTEvents(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionIoTEvents(array $args = [])
 * @method \ILABAmazon\IoTEventsData\IoTEventsDataClient createIoTEventsData(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionIoTEventsData(array $args = [])
 * @method \ILABAmazon\IoTJobsDataPlane\IoTJobsDataPlaneClient createIoTJobsDataPlane(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionIoTJobsDataPlane(array $args = [])
 * @method \ILABAmazon\IoTThingsGraph\IoTThingsGraphClient createIoTThingsGraph(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionIoTThingsGraph(array $args = [])
 * @method \ILABAmazon\Iot\IotClient createIot(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionIot(array $args = [])
 * @method \ILABAmazon\IotDataPlane\IotDataPlaneClient createIotDataPlane(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionIotDataPlane(array $args = [])
 * @method \ILABAmazon\Kafka\KafkaClient createKafka(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionKafka(array $args = [])
 * @method \ILABAmazon\Kinesis\KinesisClient createKinesis(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionKinesis(array $args = [])
 * @method \ILABAmazon\KinesisAnalytics\KinesisAnalyticsClient createKinesisAnalytics(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionKinesisAnalytics(array $args = [])
 * @method \ILABAmazon\KinesisAnalyticsV2\KinesisAnalyticsV2Client createKinesisAnalyticsV2(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionKinesisAnalyticsV2(array $args = [])
 * @method \ILABAmazon\KinesisVideo\KinesisVideoClient createKinesisVideo(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionKinesisVideo(array $args = [])
 * @method \ILABAmazon\KinesisVideoArchivedMedia\KinesisVideoArchivedMediaClient createKinesisVideoArchivedMedia(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionKinesisVideoArchivedMedia(array $args = [])
 * @method \ILABAmazon\KinesisVideoMedia\KinesisVideoMediaClient createKinesisVideoMedia(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionKinesisVideoMedia(array $args = [])
 * @method \ILABAmazon\Kms\KmsClient createKms(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionKms(array $args = [])
 * @method \ILABAmazon\Lambda\LambdaClient createLambda(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionLambda(array $args = [])
 * @method \ILABAmazon\LexModelBuildingService\LexModelBuildingServiceClient createLexModelBuildingService(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionLexModelBuildingService(array $args = [])
 * @method \ILABAmazon\LexRuntimeService\LexRuntimeServiceClient createLexRuntimeService(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionLexRuntimeService(array $args = [])
 * @method \ILABAmazon\LicenseManager\LicenseManagerClient createLicenseManager(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionLicenseManager(array $args = [])
 * @method \ILABAmazon\Lightsail\LightsailClient createLightsail(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionLightsail(array $args = [])
 * @method \ILABAmazon\MQ\MQClient createMQ(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionMQ(array $args = [])
 * @method \ILABAmazon\MTurk\MTurkClient createMTurk(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionMTurk(array $args = [])
 * @method \ILABAmazon\MachineLearning\MachineLearningClient createMachineLearning(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionMachineLearning(array $args = [])
 * @method \ILABAmazon\Macie\MacieClient createMacie(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionMacie(array $args = [])
 * @method \ILABAmazon\ManagedBlockchain\ManagedBlockchainClient createManagedBlockchain(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionManagedBlockchain(array $args = [])
 * @method \ILABAmazon\MarketplaceCommerceAnalytics\MarketplaceCommerceAnalyticsClient createMarketplaceCommerceAnalytics(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionMarketplaceCommerceAnalytics(array $args = [])
 * @method \ILABAmazon\MarketplaceEntitlementService\MarketplaceEntitlementServiceClient createMarketplaceEntitlementService(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionMarketplaceEntitlementService(array $args = [])
 * @method \ILABAmazon\MarketplaceMetering\MarketplaceMeteringClient createMarketplaceMetering(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionMarketplaceMetering(array $args = [])
 * @method \ILABAmazon\MediaConnect\MediaConnectClient createMediaConnect(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionMediaConnect(array $args = [])
 * @method \ILABAmazon\MediaConvert\MediaConvertClient createMediaConvert(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionMediaConvert(array $args = [])
 * @method \ILABAmazon\MediaLive\MediaLiveClient createMediaLive(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionMediaLive(array $args = [])
 * @method \ILABAmazon\MediaPackage\MediaPackageClient createMediaPackage(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionMediaPackage(array $args = [])
 * @method \ILABAmazon\MediaPackageVod\MediaPackageVodClient createMediaPackageVod(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionMediaPackageVod(array $args = [])
 * @method \ILABAmazon\MediaStore\MediaStoreClient createMediaStore(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionMediaStore(array $args = [])
 * @method \ILABAmazon\MediaStoreData\MediaStoreDataClient createMediaStoreData(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionMediaStoreData(array $args = [])
 * @method \ILABAmazon\MediaTailor\MediaTailorClient createMediaTailor(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionMediaTailor(array $args = [])
 * @method \ILABAmazon\MigrationHub\MigrationHubClient createMigrationHub(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionMigrationHub(array $args = [])
 * @method \ILABAmazon\Mobile\MobileClient createMobile(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionMobile(array $args = [])
 * @method \ILABAmazon\Neptune\NeptuneClient createNeptune(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionNeptune(array $args = [])
 * @method \ILABAmazon\OpsWorks\OpsWorksClient createOpsWorks(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionOpsWorks(array $args = [])
 * @method \ILABAmazon\OpsWorksCM\OpsWorksCMClient createOpsWorksCM(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionOpsWorksCM(array $args = [])
 * @method \ILABAmazon\Organizations\OrganizationsClient createOrganizations(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionOrganizations(array $args = [])
 * @method \ILABAmazon\PI\PIClient createPI(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionPI(array $args = [])
 * @method \ILABAmazon\Personalize\PersonalizeClient createPersonalize(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionPersonalize(array $args = [])
 * @method \ILABAmazon\PersonalizeEvents\PersonalizeEventsClient createPersonalizeEvents(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionPersonalizeEvents(array $args = [])
 * @method \ILABAmazon\PersonalizeRuntime\PersonalizeRuntimeClient createPersonalizeRuntime(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionPersonalizeRuntime(array $args = [])
 * @method \ILABAmazon\Pinpoint\PinpointClient createPinpoint(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionPinpoint(array $args = [])
 * @method \ILABAmazon\PinpointEmail\PinpointEmailClient createPinpointEmail(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionPinpointEmail(array $args = [])
 * @method \ILABAmazon\PinpointSMSVoice\PinpointSMSVoiceClient createPinpointSMSVoice(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionPinpointSMSVoice(array $args = [])
 * @method \ILABAmazon\Polly\PollyClient createPolly(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionPolly(array $args = [])
 * @method \ILABAmazon\Pricing\PricingClient createPricing(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionPricing(array $args = [])
 * @method \ILABAmazon\QuickSight\QuickSightClient createQuickSight(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionQuickSight(array $args = [])
 * @method \ILABAmazon\RAM\RAMClient createRAM(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionRAM(array $args = [])
 * @method \ILABAmazon\RDSDataService\RDSDataServiceClient createRDSDataService(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionRDSDataService(array $args = [])
 * @method \ILABAmazon\Rds\RdsClient createRds(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionRds(array $args = [])
 * @method \ILABAmazon\Redshift\RedshiftClient createRedshift(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionRedshift(array $args = [])
 * @method \ILABAmazon\Rekognition\RekognitionClient createRekognition(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionRekognition(array $args = [])
 * @method \ILABAmazon\ResourceGroups\ResourceGroupsClient createResourceGroups(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionResourceGroups(array $args = [])
 * @method \ILABAmazon\ResourceGroupsTaggingAPI\ResourceGroupsTaggingAPIClient createResourceGroupsTaggingAPI(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionResourceGroupsTaggingAPI(array $args = [])
 * @method \ILABAmazon\RoboMaker\RoboMakerClient createRoboMaker(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionRoboMaker(array $args = [])
 * @method \ILABAmazon\Route53\Route53Client createRoute53(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionRoute53(array $args = [])
 * @method \ILABAmazon\Route53Domains\Route53DomainsClient createRoute53Domains(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionRoute53Domains(array $args = [])
 * @method \ILABAmazon\Route53Resolver\Route53ResolverClient createRoute53Resolver(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionRoute53Resolver(array $args = [])
 * @method \ILABAmazon\S3\S3Client createS3(array $args = [])
 * @method \ILABAmazon\S3\S3MultiRegionClient createMultiRegionS3(array $args = [])
 * @method \ILABAmazon\S3Control\S3ControlClient createS3Control(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionS3Control(array $args = [])
 * @method \ILABAmazon\SageMaker\SageMakerClient createSageMaker(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionSageMaker(array $args = [])
 * @method \ILABAmazon\SageMakerRuntime\SageMakerRuntimeClient createSageMakerRuntime(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionSageMakerRuntime(array $args = [])
 * @method \ILABAmazon\SecretsManager\SecretsManagerClient createSecretsManager(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionSecretsManager(array $args = [])
 * @method \ILABAmazon\SecurityHub\SecurityHubClient createSecurityHub(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionSecurityHub(array $args = [])
 * @method \ILABAmazon\ServerlessApplicationRepository\ServerlessApplicationRepositoryClient createServerlessApplicationRepository(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionServerlessApplicationRepository(array $args = [])
 * @method \ILABAmazon\ServiceCatalog\ServiceCatalogClient createServiceCatalog(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionServiceCatalog(array $args = [])
 * @method \ILABAmazon\ServiceDiscovery\ServiceDiscoveryClient createServiceDiscovery(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionServiceDiscovery(array $args = [])
 * @method \ILABAmazon\ServiceQuotas\ServiceQuotasClient createServiceQuotas(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionServiceQuotas(array $args = [])
 * @method \ILABAmazon\Ses\SesClient createSes(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionSes(array $args = [])
 * @method \ILABAmazon\Sfn\SfnClient createSfn(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionSfn(array $args = [])
 * @method \ILABAmazon\Shield\ShieldClient createShield(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionShield(array $args = [])
 * @method \ILABAmazon\Sms\SmsClient createSms(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionSms(array $args = [])
 * @method \ILABAmazon\SnowBall\SnowBallClient createSnowBall(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionSnowBall(array $args = [])
 * @method \ILABAmazon\Sns\SnsClient createSns(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionSns(array $args = [])
 * @method \ILABAmazon\Sqs\SqsClient createSqs(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionSqs(array $args = [])
 * @method \ILABAmazon\Ssm\SsmClient createSsm(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionSsm(array $args = [])
 * @method \ILABAmazon\StorageGateway\StorageGatewayClient createStorageGateway(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionStorageGateway(array $args = [])
 * @method \ILABAmazon\Sts\StsClient createSts(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionSts(array $args = [])
 * @method \ILABAmazon\Support\SupportClient createSupport(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionSupport(array $args = [])
 * @method \ILABAmazon\Swf\SwfClient createSwf(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionSwf(array $args = [])
 * @method \ILABAmazon\Textract\TextractClient createTextract(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionTextract(array $args = [])
 * @method \ILABAmazon\TranscribeService\TranscribeServiceClient createTranscribeService(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionTranscribeService(array $args = [])
 * @method \ILABAmazon\Transfer\TransferClient createTransfer(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionTransfer(array $args = [])
 * @method \ILABAmazon\Translate\TranslateClient createTranslate(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionTranslate(array $args = [])
 * @method \ILABAmazon\Waf\WafClient createWaf(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionWaf(array $args = [])
 * @method \ILABAmazon\WafRegional\WafRegionalClient createWafRegional(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionWafRegional(array $args = [])
 * @method \ILABAmazon\WorkDocs\WorkDocsClient createWorkDocs(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionWorkDocs(array $args = [])
 * @method \ILABAmazon\WorkLink\WorkLinkClient createWorkLink(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionWorkLink(array $args = [])
 * @method \ILABAmazon\WorkMail\WorkMailClient createWorkMail(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionWorkMail(array $args = [])
 * @method \ILABAmazon\WorkSpaces\WorkSpacesClient createWorkSpaces(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionWorkSpaces(array $args = [])
 * @method \ILABAmazon\XRay\XRayClient createXRay(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionXRay(array $args = [])
 * @method \ILABAmazon\signer\signerClient createsigner(array $args = [])
 * @method \ILABAmazon\MultiRegionClient createMultiRegionsigner(array $args = [])
 */
class Sdk
{
    const VERSION = '3.103.1';

    /** @var array Arguments for creating clients */
    private $args;

    /**
     * Constructs a new SDK object with an associative array of default
     * client settings.
     *
     * @param array $args
     *
     * @throws \InvalidArgumentException
     * @see ILABAmazon\AwsClient::__construct for a list of available options.
     */
    public function __construct(array $args = [])
    {
        $this->args = $args;

        if (!isset($args['handler']) && !isset($args['http_handler'])) {
            $this->args['http_handler'] = default_http_handler();
        }
    }

    public function __call($name, array $args)
    {
        $args = isset($args[0]) ? $args[0] : [];
        if (strpos($name, 'createMultiRegion') === 0) {
            return $this->createMultiRegionClient(substr($name, 17), $args);
        }

        if (strpos($name, 'create') === 0) {
            return $this->createClient(substr($name, 6), $args);
        }

        throw new \BadMethodCallException("Unknown method: {$name}.");
    }

    /**
     * Get a client by name using an array of constructor options.
     *
     * @param string $name Service name or namespace (e.g., DynamoDb, s3).
     * @param array  $args Arguments to configure the client.
     *
     * @return AwsClientInterface
     * @throws \InvalidArgumentException if any required options are missing or
     *                                   the service is not supported.
     * @see ILABAmazon\AwsClient::__construct for a list of available options for args.
     */
    public function createClient($name, array $args = [])
    {
        // Get information about the service from the manifest file.
        $service = manifest($name);
        $namespace = $service['namespace'];

        // Instantiate the client class.
        $client = "ILABAmazon\\{$namespace}\\{$namespace}Client";
        return new $client($this->mergeArgs($namespace, $service, $args));
    }

    public function createMultiRegionClient($name, array $args = [])
    {
        // Get information about the service from the manifest file.
        $service = manifest($name);
        $namespace = $service['namespace'];

        $klass = "ILABAmazon\\{$namespace}\\{$namespace}MultiRegionClient";
        $klass = class_exists($klass) ? $klass : 'ILABAmazon\\MultiRegionClient';

        return new $klass($this->mergeArgs($namespace, $service, $args));
    }

    /**
     * Clone existing SDK instance with ability to pass an associative array
     * of extra client settings.
     *
     * @param array $args
     *
     * @return self
     */
    public function copy(array $args = [])
    {
        return new self($args + $this->args);
    }

    private function mergeArgs($namespace, array $manifest, array $args = [])
    {
        // Merge provided args with stored, service-specific args.
        if (isset($this->args[$namespace])) {
            $args += $this->args[$namespace];
        }

        // Provide the endpoint prefix in the args.
        if (!isset($args['service'])) {
            $args['service'] = $manifest['endpoint'];
        }

        return $args + $this->args;
    }

    /**
     * Determine the endpoint prefix from a client namespace.
     *
     * @param string $name Namespace name
     *
     * @return string
     * @internal
     * @deprecated Use the `\ILABAmazon\manifest()` function instead.
     */
    public static function getEndpointPrefix($name)
    {
        return manifest($name)['endpoint'];
    }
}
