<?php

namespace Handcrafted\Shippo;

use GuzzleHttp\Client;

abstract class ClientBase {

  /**
   * The base url for the api requests.
   *
   * @var string
   */
  public readonly string $baseUrl;

  /**
   * The key (or "token") to use for the requests.
   *
   * @var string
   */
  public readonly string $apiKey;

  /**
   * The version of the API that this wrapper was built for.
   *
   * Shippo doesn't seem to actually use any real versioning
   * for their API, so instead this is just the date that appears
   * in the api that exists at the time of writing.
   *
   * @var string
   */
  public readonly string $apiVersion;

  /**
   * The guzzle http client.
   *
   * @var \GuzzleHttp\Client
   */
  private readonly Client $guzzleClient;

  /**
   * Creates an API instance and sets up the guzzle client.
   *
   * @param string $api_token
   *   The token to use for API requests.
   */
  public function __construct(string $api_token) {
    $this->baseUrl = 'https://api.goshippo.com';
    $this->apiKey = $api_token;
    $this->guzzleClient = new Client([
      'base_uri' => $this->baseUrl,
      'headers' => [
        'Authorization' => "ShippoToken $api_token",
      ],
    ]);
  }

  /**
   * Makes a request to the api.
   *
   * @param string $method
   *   The request method. GET, POST, or PUT.
   * @param string $endpoint_uri
   *   The url of the request.
   * @param array|null $params
   *   (optional) Params to pass along to the request.
   *
   * @throws \GuzzleHttp\Exception\GuzzleException
   */
  public function request(string $method, string $endpoint_uri, ?array $params = NULL): \stdClass {
    $response = $this->guzzleClient->request($method, $endpoint_uri, ['json' => $params]);
    $contents = $response->getBody()->getContents();
    return \GuzzleHttp\json_decode($contents);
  }

}
