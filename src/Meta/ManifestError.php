<?php

namespace Handcrafted\Shippo\Meta;

use Handcrafted\Shippo\MapperTrait;

class ManifestError {

  use MapperTrait;

  public readonly string $code;

  public readonly string $message;

  public function __construct(\stdClass $source) {
    $this->map($source);
  }

}