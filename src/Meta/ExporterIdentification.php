<?php

namespace Handcrafted\Shippo\Meta;

use Handcrafted\Shippo\MapperTrait;

class ExporterIdentification {

  use MapperTrait;

  public readonly ?string $eoriNumber;

  public readonly ?TaxIdentification $taxId;

  public function __construct(\stdClass $source) {
    $this->taxId = $source->taxId;
    $this->map($source);
  }

}