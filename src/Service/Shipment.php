<?php

namespace HandcraftedShippo\Service;

class Shipment extends ServiceBase {

  /**
   * Creates a shipment.
   *
   * @param $params - The request parameters.
   *
   * @see https://goshippo.com/docs/reference/php#addresses-create
   */
  public function create($params): \HandcraftedShippo\Resource\Shipment {
    $data = $this->request('post', '/shipments', $params);
    return new \HandcraftedShippo\Resource\Shipment($data);
  }

}
