<?php

namespace Handcrafted\Shippo\Meta;

use Handcrafted\Shippo\Mapper;
use Handcrafted\Shippo\MapperTrait;

class ServiceLevelSimple {

  use MapperTrait;

  public readonly string $token;

  public readonly string $name;

  public function __construct(\stdClass $source) {
    $this->map($source);
  }

}
