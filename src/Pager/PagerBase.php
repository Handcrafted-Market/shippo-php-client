<?php

namespace Handcrafted\Shippo\Pager;

use Handcrafted\Shippo\Resource\ResourceBase;

abstract class PagerBase extends ResourceBase {

  /**
   * @var string
   */
  public readonly string $next;

  /**
   * @var string
   */
  public readonly string $previous;

  /**
   * @var array
   */
  public readonly array $results;

}