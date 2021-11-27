<?php

namespace Handcrafted\Shippo;

use Handcrafted\Shippo\Service\Shipment;

class Client extends ClientBase {

  public function shipment() {
    return new Shipment($this);
  }

}
