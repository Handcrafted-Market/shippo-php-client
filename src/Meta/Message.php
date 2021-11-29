<?php

namespace Handcrafted\Shippo\Meta;

use Handcrafted\Shippo\Resource\ResourceBase;

class Message extends ResourceBase {

  /**
   * @var string
   */
  public readonly $source;

  /**
   * @var string
   */
  public readonly $code;

  /**
   * @var string
   */
  public readonly $type;

  /**
   * @var string
   */
  public readonly $text;

}
