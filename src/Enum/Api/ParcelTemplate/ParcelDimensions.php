<?php

namespace Handcrafted\Shippo\Enum\Api\ParcelTemplate;

use Handcrafted\Shippo\Enum\DistanceUnit;

class ParcelDimensions {

  public function __construct(
    public readonly float|int $length,
    public readonly float|int $width,
    public readonly float|int $height,
    public readonly DistanceUnit $unit) {
  }

}
