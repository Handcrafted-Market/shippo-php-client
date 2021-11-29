<?php

namespace Handcrafted\Shippo\Service;

use Handcrafted\Shippo\Resource\Pager\ParcelPager;

class CarrierAccount extends ServiceBase {

  /**
   * Creates a carrier account.
   *
   * @param array $params - The request parameters.
   *
   * @see https://goshippo.com/docs/reference/php#carrier-accounts-create
   */
  public function create(array $params): \Handcrafted\Shippo\Resource\CarrierAccount {
    $data = $this->request('post', '/carrier_accounts', $params);
    return new \Handcrafted\Shippo\Resource\CarrierAccount($data);
  }

  /**
   * Updates a carrier account.
   *
   * @param array $params - The request parameters.
   *
   * @see https://goshippo.com/docs/reference/php#carrier-accounts-update
   */
  public function update(array $params): \Handcrafted\Shippo\Resource\CarrierAccount {
    $data = $this->request('put', '/carrier_accounts', $params);
    return new \Handcrafted\Shippo\Resource\CarrierAccount($data);
  }

  /**
   * Gets a carrier account.
   *
   * @param string $id - The parcel ID.
   *
   * @see https://goshippo.com/docs/reference/php#carrier-accounts-retrieve
   */
  public function get(string $id):
  \Handcrafted\Shippo\Resource\CarrierAccount {
    $data = $this->request('get', "/carrier_accounts/$id");
    return new \Handcrafted\Shippo\Resource\CarrierAccount($data);
  }

  /**
   * Lists all carrier accounts..
   *
   * @see https://goshippo.com/docs/reference/php#carrier-accounts-list
   */
  public function listAll():
  \Handcrafted\Shippo\Resource\Pager\ParcelPager {
    $data = $this->request('get', "/carrier_accounts");
    return new ParcelPager($data);
  }

}
