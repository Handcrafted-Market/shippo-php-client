<?php

namespace Handcrafted\Shippo\Meta;

use Handcrafted\Shippo\Mapper;

class TaxIdentification extends Mapper {

  public readonly ?string $number;

  public readonly ?string $type;

}