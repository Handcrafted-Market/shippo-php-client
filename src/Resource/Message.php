<?php

namespace Handcrafted\Shippo\Resource;

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
