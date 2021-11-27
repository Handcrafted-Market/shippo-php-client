<?php

namespace Handcrafted\Shippo\Service;

use Handcrafted\Shippo\Client;

abstract class ServiceBase implements ServiceInterface {

  /**
   * @var \Handcrafted\Shippo\Client
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
