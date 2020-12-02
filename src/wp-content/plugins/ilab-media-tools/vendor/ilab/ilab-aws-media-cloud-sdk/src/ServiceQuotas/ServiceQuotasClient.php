<?php
namespace ILABAmazon\ServiceQuotas;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **Service Quotas** service.
 * @method \ILABAmazon\Result associateServiceQuotaTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateServiceQuotaTemplateAsync(array $args = [])
 * @method \ILABAmazon\Result deleteServiceQuotaIncreaseRequestFromTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteServiceQuotaIncreaseRequestFromTemplateAsync(array $args = [])
 * @method \ILABAmazon\Result disassociateServiceQuotaTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateServiceQuotaTemplateAsync(array $args = [])
 * @method \ILABAmazon\Result getAWSDefaultServiceQuota(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAWSDefaultServiceQuotaAsync(array $args = [])
 * @method \ILABAmazon\Result getAssociationForServiceQuotaTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAssociationForServiceQuotaTemplateAsync(array $args = [])
 * @method \ILABAmazon\Result getRequestedServiceQuotaChange(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRequestedServiceQuotaChangeAsync(array $args = [])
 * @method \ILABAmazon\Result getServiceQuota(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getServiceQuotaAsync(array $args = [])
 * @method \ILABAmazon\Result getServiceQuotaIncreaseRequestFromTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getServiceQuotaIncreaseRequestFromTemplateAsync(array $args = [])
 * @method \ILABAmazon\Result listAWSDefaultServiceQuotas(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAWSDefaultServiceQuotasAsync(array $args = [])
 * @method \ILABAmazon\Result listRequestedServiceQuotaChangeHistory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRequestedServiceQuotaChangeHistoryAsync(array $args = [])
 * @method \ILABAmazon\Result listRequestedServiceQuotaChangeHistoryByQuota(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRequestedServiceQuotaChangeHistoryByQuotaAsync(array $args = [])
 * @method \ILABAmazon\Result listServiceQuotaIncreaseRequestsInTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listServiceQuotaIncreaseRequestsInTemplateAsync(array $args = [])
 * @method \ILABAmazon\Result listServiceQuotas(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listServiceQuotasAsync(array $args = [])
 * @method \ILABAmazon\Result listServices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listServicesAsync(array $args = [])
 * @method \ILABAmazon\Result putServiceQuotaIncreaseRequestIntoTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putServiceQuotaIncreaseRequestIntoTemplateAsync(array $args = [])
 * @method \ILABAmazon\Result requestServiceQuotaIncrease(array $args = [])
 * @method \GuzzleHttp\Promise\Promise requestServiceQuotaIncreaseAsync(array $args = [])
 */
class ServiceQuotasClient extends AwsClient {}
