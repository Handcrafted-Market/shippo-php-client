<?php

namespace Handcrafted\Shippo\Meta;

use Handcrafted\Shippo\MapperTrait;

class ValidationResult {

  use MapperTrait;

  /**
   * @var bool
   */
  public readonly bool $isValid;

  /**
   * @var \Handcrafted\Shippo\Meta\Message[]
   */
  public readonly array $messages;

  public function __construct(\stdClass $source) {
    $this->messages = array_map(fn($m) => new Message($m), $source->messages);
    $this->map($source);
  }

}
