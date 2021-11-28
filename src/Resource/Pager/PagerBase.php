<?php

namespace Handcrafted\Shippo\Resource\Pager;

use Handcrafted\Shippo\Resource\ResourceBase;

abstract class PagerBase extends ResourceBase {

  /**
   * @var string
   */
  protected $next;

  /**
   * @var string
   */
  protected $previous;

  /**
   * @var array
   */
  protected $results;

}