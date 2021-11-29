<?php

namespace Handcrafted\Shippo\Service;

class Batch extends ServiceBase {

  /**
   * Creates a batch.
   *
   * @param array $params - The request parameters.
   *
   * @see https://goshippo.com/docs/reference/php#batches-create
   */
  public function create(array $params): \Handcrafted\Shippo\Resource\Batch {
    $data = $this->request('post', '/batches', $params);
    return new \Handcrafted\Shippo\Resource\Batch($data);
  }

  /**
   * Adds batch shipments to a batch.
   *
   * @param string $id - The ID of the batch on which the shipments are to be added.
   * @param array $params - The request parameters.
   *
   * @see https://goshippo.com/docs/reference/php#batches-add-shipments
   */
  public function addBatchShipments(string $id, array $params): \Handcrafted\Shippo\Resource\Batch {
    $data = $this->request('post', "/batches/$id/add_shipments", $params);
    return new \Handcrafted\Shippo\Resource\Batch($data);
  }

  /**
   * Removes batch shipments from a batch.
   *
   * @param string $id - The ID of the batch from which the shipments are to be removed.
   * @param array $params - The request parameters.
   *
   * @see https://goshippo.com/docs/reference/php#batches-add-shipments
   */
  public function removeBatchShipments(string $id, array $params): \Handcrafted\Shippo\Resource\Batch {
    $data = $this->request('post', "/batches/$id/remove_shipments", $params);
    return new \Handcrafted\Shippo\Resource\Batch($data);
  }

  /**
   * Gets a batch.
   *
   * @param string $id - The batch ID.
   *
   * @see https://goshippo.com/docs/reference/php#batches-retrieve
   */
  public function get(string $id):
  \Handcrafted\Shippo\Resource\Batch {
    $data = $this->request('get', "/batches/$id");
    return new \Handcrafted\Shippo\Resource\Batch($data);
  }


}
