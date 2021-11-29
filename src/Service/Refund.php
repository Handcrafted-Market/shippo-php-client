<?php

namespace Handcrafted\Shippo\Service;

use Handcrafted\Shippo\Pager\ParcelPager;
use Handcrafted\Shippo\Pager\RefundPager;

class Refund extends ServiceBase {

  /**
   * Creates a refund.
   *
   * @param array $params - The request parameters.
   *
   * @see https://goshippo.com/docs/reference/php#refunds-create
   */
  public function create(array $params): \Handcrafted\Shippo\Resource\Refund {
    $data = $this->request('post', '/refunds', $params);
    return new \Handcrafted\Shippo\Resource\Refund($data);
  }

  /**
   * Gets a refund.
   *
   * @param string $id - The parcel ID.
   *
   * @see https://goshippo.com/docs/reference/php#refunds-retrieve
   */
  public function get(string $id):
  \Handcrafted\Shippo\Resource\Refund {
    $data = $this->request('get', "/refunds/$id");
    return new \Handcrafted\Shippo\Resource\Refund($data);
  }

  /**
   * Lists all refunds.
   *
   * @see https://goshippo.com/docs/reference/php#refunds-list
   */
  public function listAll():
  \Handcrafted\Shippo\Pager\RefundPager {
    $data = $this->request('get', "/refunds");
    return new RefundPager($data);
  }

}
