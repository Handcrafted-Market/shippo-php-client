<?php

namespace Handcrafted\Shippo\Resource;

class CarrierAccount extends ResourceBase {

  public readonly string $objectId;

  public readonly string $objectOwner;

  public readonly string $carrier;

  public readonly string $accountId;

  /**
   * @var string[]
   */
  public readonly array $parameters;

  protected bool $test;

  protected bool $active;

}