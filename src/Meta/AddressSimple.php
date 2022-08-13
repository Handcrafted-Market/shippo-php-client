<?php

namespace Handcrafted\Shippo\Meta;

use Handcrafted\Shippo\MapperTrait;

class AddressSimple {

  use MapperTrait;

  public readonly string $city;

  public readonly string $state;

  public readonly string $zip;

  public readonly string $country;

  public function __construct(\stdClass $source) {
    $this->map($source);
  }

}