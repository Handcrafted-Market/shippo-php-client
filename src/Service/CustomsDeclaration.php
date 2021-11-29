<?php

namespace Handcrafted\Shippo\Service;

use Handcrafted\Shippo\Pager\CustomsDeclarationsPager;

class CustomsDeclaration extends ServiceBase {

  /**
   * Creates a customs declaration.
   *
   * @param array $params - The request parameters.
   *
   * @see https://goshippo.com/docs/reference/php#customs-declaration-create
   */
  public function create(array $params): \Handcrafted\Shippo\Resource\CustomsDeclaration {
    $data = $this->request('post', '/customs/declarations', $params);
    return new \Handcrafted\Shippo\Resource\CustomsDeclaration($data);
  }

  /**
   * Gets a customs declaration.
   *
   * @param string $id - The customs declaration ID.
   *
   * @see https://goshippo.com/docs/reference/php#customs-declaration-retrieve
   */
  public function get(string $id):
  \Handcrafted\Shippo\Resource\CustomsDeclaration {
    $data = $this->request('get', "/customs/declarations/$id");
    return new \Handcrafted\Shippo\Resource\CustomsDeclaration($data);
  }

  /**
   * Lists all customs declarations.
   *
   * @see https://goshippo.com/docs/reference/php#customs-declaration-list
   */
  public function listAll():
  \Handcrafted\Shippo\Pager\CustomsDeclarationsPager {
    $data = $this->request('get', "/customs/declarations");
    return new CustomsDeclarationsPager($data);
  }

}
