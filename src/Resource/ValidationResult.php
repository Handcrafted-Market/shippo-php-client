<?php

namespace Handcrafted\Shippo\Resource;

class ValidationResult extends ResourceBase {

  /**
   * @var bool
   */
  protected $isValid;

  /**
   * @var \Handcrafted\Shippo\Resource\Message[]
   */
  protected $messages;

}
