<?php

namespace Handcrafted\Shippo\Service;

class Shipment extends ServiceBase {

  /**
   * Creates a shipment.
   *
   * @param array $params - The request parameters.
   *
   * @see https://goshippo.com/docs/reference/php#addresses-create
   */
  public function create(array $params): \Handcrafted\Shippo\Resource\Shipment {
    $data = $this->request('post', '/shipments', $params);
    return new \Handcrafted\Shippo\Resource\Shipment($data);
  }

  /**
   * Gets a shipment.
   *
   * @param string $id - The shipment ID.
   *
   * @see https://goshippo.com/docs/reference/php#shipments-retrieve
   */
  public function get(string $id):
  \Handcrafted\Shippo\Resource\Shipment {
    $data = $this->request('get', "/shipments/$id");
    return new \Handcrafted\Shippo\Resource\Shipment($data);
  }

  /**
   * Lists all shipments
   *
   * @param array|null $path_params - Optional path params to filter the request.
   *   - object_created_gt - object(s) created greater than a provided date time
   *   - object_created_gte - object(s) created greater than or equal to a provided date time
   *   - object_created_lt - object(s) created less than a provided date time
   *   - object_created_lte - object(s) created less than or equal to a provided date time
   *
   * @see https://goshippo.com/docs/reference/php#shipments-list
   */
  public function listAll(?array $path_params):
  \Handcrafted\Shippo\Resource\Pager {
    $request_params = !empty($path_params)
      ? ['query' => $path_params]
      : NULL;
    $data = $this->request('get', "/shipments", $request_params);

    return new \Handcrafted\Shippo\Resource\Pager($data);
  }

  /**
   * Gets the rates for a shipment.
   *
   * @param string $shipment_id - The shipment ID.
   * @param string $currency_code - The currency code..
   *
   * @see https://goshippo.com/docs/reference/php#rates-get
   */
  public function getRates(string $shipment_id, string $currency_code): \Handcrafted\Shippo\Resource\Pager {
    $data = $this->request('get', "/shipments/$shipment_id/rates/$currency_code");
    return new \Handcrafted\Shippo\Resource\Pager($data);
  }

}
