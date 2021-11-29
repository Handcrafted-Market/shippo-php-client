<?php

namespace Handcrafted\Shippo\Service;

use Handcrafted\Shippo\Pager\OrderPager;

class Order extends ServiceBase {

  /**
   * Creates an order.
   *
   * @param array $params - The request parameters.
   *
   * @see https://goshippo.com/docs/reference/php#orders-create
   */
  public function create(array $params): \Handcrafted\Shippo\Resource\Order {
    $data = $this->request('post', '/orders', $params);
    return new \Handcrafted\Shippo\Resource\Order($data);
  }

  /**
   * Gets an order.
   *
   * @param string $id - The parcel ID.
   *
   * @see https://goshippo.com/docs/reference/php#orders-retrieve
   */
  public function get(string $id):
  \Handcrafted\Shippo\Resource\Order {
    $data = $this->request('get', "/orders/$id");
    return new \Handcrafted\Shippo\Resource\Order($data);
  }

  /**
   * Lists all orders.
   *
   * @see https://goshippo.com/docs/reference/php#orders-list
   */
  public function listAll():
  \Handcrafted\Shippo\Pager\OrderPager {
    $data = $this->request('get', "/parcels");
    return new OrderPager($data);
  }

}
