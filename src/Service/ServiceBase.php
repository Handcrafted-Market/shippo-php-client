<?php

namespace handcrafted\shippo\Service;

use handcrafted\shippo\Client;

abstract class ServiceBase implements ServiceInterface {

  /**
   * @var \handcrafted\shippo\Client
   */
  private Client $client;

  public function __construct(Client $client) {
    $this->client = $client;
  }

  public function getClient() {
    return $this->client;
  }

  protected function request(string $method, string $endpoint_uri, ?array $params = NULL) {
    return $this->client->request($method, $endpoint_uri, $params);
  }

}
