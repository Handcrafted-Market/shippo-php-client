<?php

namespace Handcrafted\Shippo;

use Handcrafted\Shippo\Service\Parcel;
use Handcrafted\Shippo\Service\Rate;
use Handcrafted\Shippo\Service\Shipment;
use \Handcrafted\Shippo\Service\Address;

class Client extends ClientBase {

  /**
   * @return \Handcrafted\Shippo\Service\Shipment - The shipment service.
   */
  public function shipment(): Shipment {
    return new Shipment($this);
  }

  /**
   * @return \Handcrafted\Shippo\Service\Address - The address service.
   */
  public function address(): Address {
    return new Address($this);
  }

  /**
   * @return \Handcrafted\Shippo\Service\Parcel - The parcel service.
   */
  public function parcel(): Parcel {
    return new Parcel($this);
  }

  /**
   * @return \Handcrafted\Shippo\Service\Rate - The rate service.
   */
  public function rate(): Rate {
    return new Rate($this);
  }


}
