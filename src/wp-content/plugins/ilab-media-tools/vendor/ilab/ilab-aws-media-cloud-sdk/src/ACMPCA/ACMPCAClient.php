<?php
namespace ILABAmazon\ACMPCA;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **AWS Certificate Manager Private Certificate Authority** service.
 * @method \ILABAmazon\Result createCertificateAuthority(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCertificateAuthorityAsync(array $args = [])
 * @method \ILABAmazon\Result createCertificateAuthorityAuditReport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCertificateAuthorityAuditReportAsync(array $args = [])
 * @method \ILABAmazon\Result createPermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPermissionAsync(array $args = [])
 * @method \ILABAmazon\Result deleteCertificateAuthority(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCertificateAuthorityAsync(array $args = [])
 * @method \ILABAmazon\Result deletePermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePermissionAsync(array $args = [])
 * @method \ILABAmazon\Result describeCertificateAuthority(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCertificateAuthorityAsync(array $args = [])
 * @method \ILABAmazon\Result describeCertificateAuthorityAuditReport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCertificateAuthorityAuditReportAsync(array $args = [])
 * @method \ILABAmazon\Result getCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCertificateAsync(array $args = [])
 * @method \ILABAmazon\Result getCertificateAuthorityCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCertificateAuthorityCertificateAsync(array $args = [])
 * @method \ILABAmazon\Result getCertificateAuthorityCsr(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCertificateAuthorityCsrAsync(array $args = [])
 * @method \ILABAmazon\Result importCertificateAuthorityCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importCertificateAuthorityCertificateAsync(array $args = [])
 * @method \ILABAmazon\Result issueCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise issueCertificateAsync(array $args = [])
 * @method \ILABAmazon\Result listCertificateAuthorities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCertificateAuthoritiesAsync(array $args = [])
 * @method \ILABAmazon\Result listPermissions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPermissionsAsync(array $args = [])
 * @method \ILABAmazon\Result listTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsAsync(array $args = [])
 * @method \ILABAmazon\Result restoreCertificateAuthority(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restoreCertificateAuthorityAsync(array $args = [])
 * @method \ILABAmazon\Result revokeCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise revokeCertificateAsync(array $args = [])
 * @method \ILABAmazon\Result tagCertificateAuthority(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagCertificateAuthorityAsync(array $args = [])
 * @method \ILABAmazon\Result untagCertificateAuthority(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagCertificateAuthorityAsync(array $args = [])
 * @method \ILABAmazon\Result updateCertificateAuthority(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateCertificateAuthorityAsync(array $args = [])
 */
class ACMPCAClient extends AwsClient {}
