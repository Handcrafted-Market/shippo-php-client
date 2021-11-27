<?php

namespace Handcrafted\Shippo\Service;

class Shipment extends ServiceBase {

  /**
   * Creates a shipment.
   *
   * @param $params - The request parameters.
   *
   * @see https://goshippo.com/docs/reference/php#addresses-create
   */
  public function create($params): \Handcrafted\Shippo\Resource\Shipment {
    $data = $this->request('post', '/shipments', $params);
    return new \Handcrafted\Shippo\Resource\Shipment($data);
  }

}
