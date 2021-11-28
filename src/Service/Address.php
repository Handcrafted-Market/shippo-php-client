<?php

namespace Handcrafted\Shippo\Service;

class Address extends ServiceBase {

  /**
   * Creates a address.
   *
   * @param array $params - The request parameters.
   *
   * @see https://goshippo.com/docs/reference/php#addresses-create
   */
  public function create(array $params): \Handcrafted\Shippo\Resource\Address {
    $data = $this->request('post', '/addresses', $params);
    return new \Handcrafted\Shippo\Resource\Address($data);
  }

  /**
   * Gets an address.
   *
   * @param string $id - The address ID.
   *
   * @see https://goshippo.com/docs/reference/php#addresses-retrieve
   */
  public function get(string $id):
  \Handcrafted\Shippo\Resource\Address {
    $data = $this->request('get', "/addresses/$id");
    return new \Handcrafted\Shippo\Resource\Address($data);
  }

  /**
   * Validate an existing address by object id.
   *
   * @param string $id - The address ID.
   *
   * @see https://goshippo.com/docs/reference/php#addresses-validate
   */
  public function validate(string $id):
  \Handcrafted\Shippo\Resource\Address {
    $data = $this->request('get', "/addresses/$id/validate");
    return new \Handcrafted\Shippo\Resource\Address($data);
  }

  /**
   * Lists all addresses.
   *
   * @see https://goshippo.com/docs/reference/php#addresses-list
   */
  public function listAll(?array $path_params):
  \Handcrafted\Shippo\Resource\Pager {
    $data = $this->request('get', "/addresses");

    return new \Handcrafted\Shippo\Resource\Pager($data);
  }

}