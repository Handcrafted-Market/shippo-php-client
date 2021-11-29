<?php

namespace Handcrafted\Shippo\Resource;

class CarrierAccount extends ResourceBase {

  protected string $objectId;

  protected string $objectOwner;

  protected string $carrier;

  protected string $accountId;

  /**
   * @var string[]
   */
  protected array $parameters;

  protected bool $test;

  protected bool $active;

}