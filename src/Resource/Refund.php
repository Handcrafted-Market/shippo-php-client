<?php

namespace Handcrafted\Shippo\Resource;

class Refund extends ObjectUpdatedResourceBase {

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