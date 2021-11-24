<?php

namespace HandcraftedShippo;

use GuzzleHttp\Client;

abstract class ClientBase {

  /**
   * The base url for the api requests.
   *
   * @var string
   */
  protected $baseUrl = 'https://api.goshippo.com';

  /**
   * The key (or "token") to use for the requests.
   *
   * @var string
   */
  private $apiKey;

  /**
   * The version of the API that this wrapper was built for.
   *
   * Shippo doesn't seem to actually use any real versioning
   * for their API, so instead this is just the date that appears
   * in the api that exists at the time of writing.
   *
   * @var string
   */
  private $apiVersion = '2018-02-08';

  /**
   * The guzzle http client.
   *
   * @var \GuzzleHttp\Client
   */
  private $guzzleClient;

  /**
   * Creates an API instance and sets up the guzzle client.
   *
   * @param string $api_token
   *   The token to use for API requests.
   */
  public function __construct(string $api_token) {
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
   *   The request method. GET, POST, or PUT..
   * @param string $endpoint_uri
   *   The url of the request.
   * @param array|null $params
   *   (optional) Params to pass along to the request.
   *
   * @throws \GuzzleHttp\Exception\GuzzleException
   */
  public function request(string $method, string $endpoint_uri, ?array $params = NULL) {
    $response = $this->guzzleClient->request($method, $endpoint_uri, ['json' => $params]);
    $contents = $response->getBody()->getContents();
    return \GuzzleHttp\json_decode($contents);
  }

  /**
   * Gets the active api token.
   */
  public function getApiToken() {
    return $this->apiKey;
  }

  /**
   * Gets the api version.
   */
  public function getApiVersion() {
    return $this->apiVersion;
  }

}
