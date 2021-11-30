<?php

namespace Handcrafted\Shippo\Meta;

use Handcrafted\Shippo\Enum\TaxIdType;
use Handcrafted\Shippo\Mapper;

class TaxIdentification extends Mapper {

  public readonly ?string $number;

  public readonly TaxIdType $type;

  public function __construct(\stdClass $source) {
    $this->type = TaxIdType::from($source->type);
    parent::__construct($source);
  }

}