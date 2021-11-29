<?php

namespace Handcrafted\Shippo\Service;

class Rate extends ServiceBase {

  /**
   * Gets a rate.
   *
   * @param string $id - The rate ID.
   *
   * @see https://goshippo.com/docs/reference/php#rates-retrieve
   */
  public function get(string $id):
  \Handcrafted\Shippo\Resource\Rate {
    $data = $this->request('get', "/rates/$id");
    return new \Handcrafted\Shippo\Resource\Rate($data);
  }

  /**
   * Gets the rates for a shipment.
   *
   * @param string $shipment_id - The shipment ID.
   * @param string $currency_code - The currency code.
   *
   * @see https://goshippo.com/docs/reference/php#rates-get
   */
  public function getRatesForShipment(string $shipment_id, string $currency_code): \Handcrafted\Shippo\Pager\PagerBase {
    return $this->client->shipment->getRates($shipment_id, $currency_code);
  }

}