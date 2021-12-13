<?php

namespace Handcrafted\Shippo\Enum\Api\ParcelTemplate;

class ParcelTemplate {

  public function __construct(
    public readonly string $token,
    public readonly string $name,
    public readonly ParcelDimensions $dimensions) {
  }

}
