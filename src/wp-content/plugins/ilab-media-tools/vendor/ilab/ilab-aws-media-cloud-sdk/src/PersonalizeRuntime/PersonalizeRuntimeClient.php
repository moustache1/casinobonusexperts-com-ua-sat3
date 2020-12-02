<?php
namespace ILABAmazon\PersonalizeRuntime;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **Amazon Personalize Runtime** service.
 * @method \ILABAmazon\Result getPersonalizedRanking(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPersonalizedRankingAsync(array $args = [])
 * @method \ILABAmazon\Result getRecommendations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRecommendationsAsync(array $args = [])
 */
class PersonalizeRuntimeClient extends AwsClient {}
