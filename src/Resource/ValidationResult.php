<?php

namespace handcrafted\shippo\Resource;

class ValidationResult extends ResourceBase {

  /**
   * @var bool
   */
  protected $isValid;

  /**
   * @var \handcrafted\shippo\Resource\Message[]
   */
  protected $messages;

}
