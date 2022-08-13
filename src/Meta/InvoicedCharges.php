<?php

namespace Handcrafted\Shippo\Meta;

use Handcrafted\Shippo\MapperTrait;

class InvoicedCharges {

  use MapperTrait;

  public readonly string $currency;

  public readonly ?string $totalShipping;

  public readonly ?string $totalTaxes;

  public readonly ?string $totalDuties;

  public readonly ?string $otherFees;

  public function __construct(\stdClass $source) {
    $this->map($source);
  }

}