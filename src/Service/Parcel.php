<?php

namespace Handcrafted\Shippo\Service;

class Parcel extends ServiceBase {

  /**
   * Creates a shipment.
   *
   * @param array $params - The request parameters.
   *
   * @see https://goshippo.com/docs/reference/php#parcels-create
   */
  public function create(array $params): \Handcrafted\Shippo\Resource\Parcel {
    $data = $this->request('post', '/parcels', $params);
    return new \Handcrafted\Shippo\Resource\Parcel($data);
  }

  /**
   * Gets a shipment.
   *
   * @param string $id - The parcel ID.
   *
   * @see https://goshippo.com/docs/reference/php#parcels-retrieve
   */
  public function get(string $id):
  \Handcrafted\Shippo\Resource\Parcel {
    $data = $this->request('get', "/parcels/$id");
    return new \Handcrafted\Shippo\Resource\Parcel($data);
  }

  /**
   * Lists all parcels.
   *
   * @see https://goshippo.com/docs/reference/php#parcels-list
   */
  public function listAll(?array $path_params):
  \Handcrafted\Shippo\Resource\Pager {
    return $this->request('get', "/parcels");
  }
  
}
