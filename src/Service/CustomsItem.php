<?php

namespace Handcrafted\Shippo\Service;

class CustomsItem extends ServiceBase {

  /**
   * Creates a customs item..
   *
   * @param array $params - The request parameters.
   *
   * @see https://goshippo.com/docs/reference/php#customs-items-create
   */
  public function create(array $params): \Handcrafted\Shippo\Resource\CustomsItem {
    $data = $this->request('post', '/customs/items', $params);
    return new \Handcrafted\Shippo\Resource\CustomsItem($data);
  }

  /**
   * Gets a customs item.
   *
   * @param string $id - The CustomsItem ID.
   *
   * @see https://goshippo.com/docs/reference/php#customs-items-retrieve
   */
  public function get(string $id):
  \Handcrafted\Shippo\Resource\CustomsItem {
    $data = $this->request('get', "/customs/items/$id");
    return new \Handcrafted\Shippo\Resource\CustomsItem($data);
  }

  /**
   * Lists all customs items..
   *
   * @see https://goshippo.com/docs/reference/php#customs-items-list
   */
  public function listAll():
  \Handcrafted\Shippo\Pager\CustomsItemPager {
    $data = $this->request('get', "/customs/items");
    return new \Handcrafted\Shippo\Pager\CustomsItemPager($data);
  }

}