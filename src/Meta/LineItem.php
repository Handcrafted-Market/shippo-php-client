<?php

namespace Handcrafted\Shippo\Meta;


use Handcrafted\Shippo\MapperTrait;

class LineItem {

  use MapperTrait;

  public readonly string $objectId;

  public readonly string $title;

  public readonly string $variantTitle;

  public readonly string $sku;

  public readonly int $quantity;

  public readonly string $totalPrice;

  public readonly string $currency;

  public readonly string $weight;

  public readonly string $weightUnit;

  public readonly string $manufactureCountry;

  public readonly string $maxShipTime;

  public readonly string $maxDeliveryTime;

  public function __construct(\stdClass $source) {
    $this->map($source);
  }

}
