<?php

namespace Handcrafted\Shippo\Meta;

use Handcrafted\Shippo\Resource\ResourceBase;

class ValidationResult extends ResourceBase {

  /**
   * @var bool
   */
  public readonly $isValid;

  /**
   * @var \Handcrafted\Shippo\Meta\Message[]
   */
  public readonly $messages;

  public function __construct(\stdClass $source) {
    $this->messages = array_map(fn($m) => new Message($m), $source->messages);
    parent::__construct($source);
  }

}
