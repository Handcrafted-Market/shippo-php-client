<?php

namespace Handcrafted\Shippo\Meta;

use Handcrafted\Shippo\MapperTrait;
use Handcrafted\Shippo\Resource\ResourceBase;

class Message {

  use MapperTrait;

  /**
   * @var string
   */
  public readonly string $source;

  /**
   * @var string
   */
  public readonly string $code;

  /**
   * @var string
   */
  public readonly string $type;

  /**
   * @var string
   */
  public readonly string $text;

  public function __construct(\stdClass $source) {
    $this->map($source);
  }

}
