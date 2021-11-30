<?php

namespace Handcrafted\Shippo\Meta;

use Handcrafted\Shippo\Mapper;

class AddressSimple extends Mapper {

  public readonly string $city;

  public readonly string $state;

  public readonly string $zip;

  public readonly string $country;

}