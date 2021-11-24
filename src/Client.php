<?php

namespace handcrafted\shippo;

use handcrafted\shippo\Service\Shipment;

class Client extends ClientBase {

  public function shipment() {
    return new Shipment($this);
  }

}
