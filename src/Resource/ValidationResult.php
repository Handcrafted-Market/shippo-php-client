<?php

namespace HandcraftedShippo\Resource;

class ValidationResult extends ResourceBase {

  /**
   * @var bool
   */
  protected $isValid;

  /**
   * @var \HandcraftedShippo\Resource\Message[]
   */
  protected $messages;

}
