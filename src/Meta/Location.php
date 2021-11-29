<?php

namespace Handcrafted\Shippo\Meta;

use Handcrafted\Shippo\Resource\Address;

class Location extends \Handcrafted\Shippo\Mapper {

  public readonly string $buildingLocationType;

  public readonly string $buildingType;

  public readonly string $instructions;

  public readonly Address $address;

}