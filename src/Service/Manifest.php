<?php

namespace Handcrafted\Shippo\Service;

use Handcrafted\Shippo\Pager\ParcelPager;

class Manifest extends ServiceBase {

  /**
   * Creates a manifest.
   *
   * @param array $params - The request parameters.
   *
   * @see https://goshippo.com/docs/reference/php#manifests-create
   */
  public function create(array $params): \Handcrafted\Shippo\Resource\Manifest {
    $data = $this->request('post', '/manifests', $params);
    return new \Handcrafted\Shippo\Resource\Manifest($data);
  }

  /**
   * Gets a manifest.
   *
   * @param string $id - The parcel ID.
   *
   * @see https://goshippo.com/docs/reference/php#manifests-retrieve
   */
  public function get(string $id):
  \Handcrafted\Shippo\Resource\Manifest {
    $data = $this->request('get', "/manifests/$id");
    return new \Handcrafted\Shippo\Resource\Manifest($data);
  }

  /**
   * Lists all manifests.
   *
   * @see https://goshippo.com/docs/reference/php#manifests-list
   */
  public function listAll():
  \Handcrafted\Shippo\Pager\ParcelPager {
    $data = $this->request('get', "/manifests");
    return new ParcelPager($data);
  }

}
