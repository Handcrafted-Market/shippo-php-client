<?php

namespace Handcrafted\Shippo\Resource;

class ValidationResult extends ResourceBase {

  /**
   * @var bool
   */
  public readonly $isValid;

  /**
   * @var \Handcrafted\Shippo\Resource\Message[]
   */
  public readonly $messages;

}
