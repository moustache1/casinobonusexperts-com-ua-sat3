<?php
namespace ILABAmazon\Textract;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **Amazon Textract** service.
 * @method \ILABAmazon\Result analyzeDocument(array $args = [])
 * @method \GuzzleHttp\Promise\Promise analyzeDocumentAsync(array $args = [])
 * @method \ILABAmazon\Result detectDocumentText(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detectDocumentTextAsync(array $args = [])
 * @method \ILABAmazon\Result getDocumentAnalysis(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDocumentAnalysisAsync(array $args = [])
 * @method \ILABAmazon\Result getDocumentTextDetection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDocumentTextDetectionAsync(array $args = [])
 * @method \ILABAmazon\Result startDocumentAnalysis(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startDocumentAnalysisAsync(array $args = [])
 * @method \ILABAmazon\Result startDocumentTextDetection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startDocumentTextDetectionAsync(array $args = [])
 */
class TextractClient extends AwsClient {}
