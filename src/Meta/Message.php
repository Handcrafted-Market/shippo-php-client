<?php

namespace Handcrafted\Shippo\Meta;

use Handcrafted\Shippo\Resource\ResourceBase;

class Message extends ResourceBase {

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

}
