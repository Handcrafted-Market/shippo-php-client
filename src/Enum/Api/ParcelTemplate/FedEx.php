<?php

namespace Handcrafted\Shippo\Enum\Api\ParcelTemplate;

use Handcrafted\Shippo\Enum\DistanceUnit;

final class FedEx extends ImitationEnum implements ParcelProviderInterface {

  public function box10Kg() {
    return new ParcelTemplate(
      'FedEx_Box_10kg',
      'FedEx® 10kg Box',
      new ParcelDimensions(15.81, 12.94, 10.19, DistanceUnit::IN)
    );
  }

}
