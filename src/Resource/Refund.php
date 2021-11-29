<?php

namespace Handcrafted\Shippo\Resource;

class Refund extends ObjectUpdatedResourceBase {

  /**
   * @var string
   */
  protected $status;

  /**
   * @var string
   */
  protected $transaction;

  /**
   * @var bool
   */
  protected $test;

}