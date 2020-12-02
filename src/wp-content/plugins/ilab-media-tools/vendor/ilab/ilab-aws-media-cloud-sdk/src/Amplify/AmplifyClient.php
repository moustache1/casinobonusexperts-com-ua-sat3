<?php
namespace ILABAmazon\Amplify;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **AWS Amplify** service.
 * @method \ILABAmazon\Result createApp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAppAsync(array $args = [])
 * @method \ILABAmazon\Result createBranch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBranchAsync(array $args = [])
 * @method \ILABAmazon\Result createDomainAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDomainAssociationAsync(array $args = [])
 * @method \ILABAmazon\Result deleteApp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAppAsync(array $args = [])
 * @method \ILABAmazon\Result deleteBranch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBranchAsync(array $args = [])
 * @method \ILABAmazon\Result deleteDomainAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDomainAssociationAsync(array $args = [])
 * @method \ILABAmazon\Result deleteJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteJobAsync(array $args = [])
 * @method \ILABAmazon\Result getApp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAppAsync(array $args = [])
 * @method \ILABAmazon\Result getBranch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBranchAsync(array $args = [])
 * @method \ILABAmazon\Result getDomainAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDomainAssociationAsync(array $args = [])
 * @method \ILABAmazon\Result getJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getJobAsync(array $args = [])
 * @method \ILABAmazon\Result listApps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAppsAsync(array $args = [])
 * @method \ILABAmazon\Result listBranches(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBranchesAsync(array $args = [])
 * @method \ILABAmazon\Result listDomainAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDomainAssociationsAsync(array $args = [])
 * @method \ILABAmazon\Result listJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listJobsAsync(array $args = [])
 * @method \ILABAmazon\Result startJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startJobAsync(array $args = [])
 * @method \ILABAmazon\Result stopJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopJobAsync(array $args = [])
 * @method \ILABAmazon\Result updateApp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAppAsync(array $args = [])
 * @method \ILABAmazon\Result updateBranch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateBranchAsync(array $args = [])
 * @method \ILABAmazon\Result updateDomainAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDomainAssociationAsync(array $args = [])
 */
class AmplifyClient extends AwsClient {}
