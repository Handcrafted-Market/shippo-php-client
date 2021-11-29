<?php

namespace Handcrafted\Shippo\Pager;

use Handcrafted\Shippo\Resource\ResourceBase;

abstract class PagerBase extends ResourceBase {

  /**
   * @var string
   */
  public readonly $next;

  /**
   * @var string
   */
  public readonly $previous;

  /**
   * @var array
   */
  public readonly $results;

}