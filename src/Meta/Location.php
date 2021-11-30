<?php

namespace Handcrafted\Shippo\Meta;

use Handcrafted\Shippo\Resource\Address;

class Location extends \Handcrafted\Shippo\Mapper {

  public readonly string $buildingLocationType;

  public readonly string $buildingType;

  public readonly string $instructions;

  public readonly Address $address;

  public function __construct(\stdClass $source) {
    $this->address = new Address($source->address);
    parent::__construct($source);
  }

}