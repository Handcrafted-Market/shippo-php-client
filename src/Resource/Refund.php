<?php

namespace Handcrafted\Shippo\Resource;

use Handcrafted\Shippo\MapperTrait;

class Refund implements ResourceInterface {

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
  public readonly string $status;

  /**
   * @var string
   */
  public readonly string $transaction;

  /**
   * @var bool
   */
  public readonly bool $test;

  public function __construct(\stdClass $source) {
    $this->map($source);
  }

}