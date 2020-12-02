<?php
namespace ILABAmazon\TranscribeService;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **Amazon Transcribe Service** service.
 * @method \ILABAmazon\Result createVocabulary(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createVocabularyAsync(array $args = [])
 * @method \ILABAmazon\Result deleteTranscriptionJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTranscriptionJobAsync(array $args = [])
 * @method \ILABAmazon\Result deleteVocabulary(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVocabularyAsync(array $args = [])
 * @method \ILABAmazon\Result getTranscriptionJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTranscriptionJobAsync(array $args = [])
 * @method \ILABAmazon\Result getVocabulary(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVocabularyAsync(array $args = [])
 * @method \ILABAmazon\Result listTranscriptionJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTranscriptionJobsAsync(array $args = [])
 * @method \ILABAmazon\Result listVocabularies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listVocabulariesAsync(array $args = [])
 * @method \ILABAmazon\Result startTranscriptionJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startTranscriptionJobAsync(array $args = [])
 * @method \ILABAmazon\Result updateVocabulary(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateVocabularyAsync(array $args = [])
 */
class TranscribeServiceClient extends AwsClient {}
