<?php

namespace Handcrafted\Shippo\Service;

class Pickup extends ServiceBase {

  /**
   * Creates a pickup.
   *
   * @param array $params - The request parameters.
   *
   * @throws \GuzzleHttp\Exception\GuzzleException
   * @see https://goshippo.com/docs/reference/php#pickups-create
   */
  public function create(array $params): \Handcrafted\Shippo\Resource\Pickup {
    $data = $this->request('post', '/pickups', $params);
    return new \Handcrafted\Shippo\Resource\Pickup($data);
  }

}
