<?php

namespace Handcrafted\Shippo\Resource;

use Handcrafted\Shippo\MapperTrait;

class CustomsItem {

  use MapperTrait;

  /**
   * @var string
   */
  public readonly string $objectCreated;

  /**
   * @var string
   */
  public readonly string $objectId;

  /**
   * @var string
   */
  public readonly string $objectOwner;

  /**
   * @var string
   */
  public readonly string $objectUpdated;

  /**
   * @var string
   */
  public readonly string $objectState;

  /**
   * @var string
   */
  public readonly string $description;

  /**
   * @var int
   */
  public readonly int $quantity;

  /**
   * @var string
   */
  public readonly string $netWeight;

  /**
   * @var string
   */
  public readonly string $massUnit;

  /**
   * @var string
   */
  public readonly string $valueAmount;

  /**
   * @var string
   */
  public readonly string $valueCurrency;

  /**
   * @var string
   */
  public readonly string $tarifNumber;

  /**
   * @var string|null
   */
  public readonly ?string $skuCode;

  /**
   * @var string
   */
  public readonly string $originCountry;

  /**
   * @var string
   */
  public readonly string $eccnEar99;

  /**
   * @var string
   */
  public readonly string $metadata;

  /**
   * @var bool
   */
  public readonly bool $test;

  public function __construct(\stdClass $source) {
    $this->map($source);
  }

}