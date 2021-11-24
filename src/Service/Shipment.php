<?php

namespace handcrafted\shippo\Service;

class Shipment extends ServiceBase {

  /**
   * Creates a shipment.
   *
   * @param $params - The request parameters.
   *
   * @see https://goshippo.com/docs/reference/php#addresses-create
   */
  public function create($params): \handcrafted\shippo\Resource\Shipment {
    $data = $this->request('post', '/shipments', $params);
    return new \handcrafted\shippo\Resource\Shipment($data);
  }

}
