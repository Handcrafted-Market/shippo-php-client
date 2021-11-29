<?php

namespace Handcrafted\Shippo\Resource;

class Refund extends ResourceBase {

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
  public readonly $status;

  /**
   * @var string
   */
  public readonly $transaction;

  /**
   * @var bool
   */
  public readonly $test;

}