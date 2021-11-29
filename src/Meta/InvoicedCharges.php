<?php

namespace Handcrafted\Shippo\Meta;

use Handcrafted\Shippo\Mapper;

class InvoicedCharges extends Mapper {

  public readonly string $currency;

  public readonly ?string $totalShipping;

  public readonly ?string $totalTaxes;

  public readonly ?string $totalDuties;

  public readonly ?string $otherFees;

}