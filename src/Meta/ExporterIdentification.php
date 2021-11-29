<?php

namespace Handcrafted\Shippo\Meta;

use Handcrafted\Shippo\Mapper;

class ExporterIdentification extends Mapper {

  public readonly ?string $eoriNumber;

  public readonly ?TaxIdentification $taxId;

  public function __construct(\stdClass $source) {
    $this->taxId = $source->taxId;
    parent::__construct($source);
  }

}