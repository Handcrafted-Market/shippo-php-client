<?php

namespace Handcrafted\Shippo\Service;

class Transaction extends ServiceBase {

  /**
   * Creates a transaction (shipping label).
   *
   * @param array $params - The request parameters.
   *
   * @throws \GuzzleHttp\Exception\GuzzleException
   * @see https://goshippo.com/docs/reference/php#transactions-create-instant
   * @see https://goshippo.com/docs/reference/php#transactions-create
   */
  public function create(array $params): \Handcrafted\Shippo\Resource\Transaction {
    $data = $this->request('post', '/transactions', $params);
    return new \Handcrafted\Shippo\Resource\Transaction($data);
  }

  /**
   * Gets a transaction (shipping label).
   *
   * @param string $id - The transaction ID.
   *
   * @throws \GuzzleHttp\Exception\GuzzleException
   * @see https://goshippo.com/docs/reference/php#transactions-retrieve
   */
  public function get(string $id):
  \Handcrafted\Shippo\Resource\Transaction {
    $data = $this->request('get', "/transactions/$id");
    return new \Handcrafted\Shippo\Resource\Transaction($data);
  }

  /**
   * Lists all parcels.
   *
   * @see https://goshippo.com/docs/reference/php#parcels-list
   * @throws \GuzzleHttp\Exception\GuzzleException
   */
  public function listAll():
  \Handcrafted\Shippo\Pager\TransactionPager {
    $data = $this->request('get', "/transactions");
    return new \Handcrafted\Shippo\Pager\TransactionPager($data);
  }

}