<?php

namespace Handcrafted\Shippo\Meta;

use Handcrafted\Shippo\Enum\BuildingLocationType;
use Handcrafted\Shippo\Enum\BuildingType;
use Handcrafted\Shippo\Resource\Address;

class Location extends \Handcrafted\Shippo\Mapper {

  public readonly BuildingLocationType $buildingLocationType;

  public readonly BuildingType $buildingType;

  public readonly string $instructions;

  public readonly Address $address;

  public function __construct(\stdClass $source) {
    $this->address = new Address($source->address);
    $this->buildingLocationType = BuildingLocationType::from($source->building_location_type);
    $this->buildingType = BuildingType::from($source->building_type);
    parent::__construct($source);
  }

}