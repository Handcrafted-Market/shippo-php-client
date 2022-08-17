<?php

namespace Handcrafted\Shippo\Meta;

use Handcrafted\Shippo\Enum\TrackingSubStatusCode;
use Handcrafted\Shippo\MapperTrait;

class TrackingSubStatus {

  use MapperTrait;

  public readonly TrackingSubStatusCode $code;

  public readonly string $text;

  public readonly bool $actionRequired;

  public function __construct(\stdClass $source) {
    $this->code = TrackingSubStatusCode::from($source->code);
    $this->map($source);
  }

}