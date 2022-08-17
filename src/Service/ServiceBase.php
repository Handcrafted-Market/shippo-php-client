<?php

namespace Handcrafted\Shippo\Service;

use Handcrafted\Shippo\Client;

abstract class ServiceBase {
  
  public readonly Client $client;

  public function __construct(Client $client) {
    $this->client = $client;
  }

  /**
   * Makes a request.
   *
   * @param string $method
   *   The request method.
   * @param string $endpoint_uri
   *   The endpoint uri to use for the request.
   * @param array|null $params
   *   The request params.
   *
   * @return \stdClass
   * @throws \GuzzleHttp\Exception\GuzzleException
   */
  protected function request(string $method, string $endpoint_uri, ?array $params = NULL): \stdClass {
    return $this->client->request($method, $endpoint_uri, $params);
  }

}
