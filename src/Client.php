<?php

namespace HandcraftedShippo;

use HandcraftedShippo\Service\Shipment;

class Client extends ClientBase {

  public function shipment() {
    return new Shipment($this);
  }

}
