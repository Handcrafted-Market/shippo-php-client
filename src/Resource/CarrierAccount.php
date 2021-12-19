<?php

namespace Handcrafted\Shippo\Resource;

use Handcrafted\Shippo\MapperTrait;

class CarrierAccount {

  use MapperTrait;

  public readonly string $objectId;

  public readonly string $objectOwner;

  public readonly string $carrier;

  public readonly string $accountId;

  /**
   * @var string[]
   */
  public readonly array $parameters;

  public readonly bool $test;

  public readonly bool $active;

  public function __construct(\stdClass $source) {
    $this->map($source);
  }

}