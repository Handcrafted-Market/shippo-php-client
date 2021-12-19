<?php

namespace Handcrafted\Shippo\Pager;


use Handcrafted\Shippo\MapperTrait;

abstract class PagerBase {

  use MapperTrait;

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
 
  public function __construct(\stdClass $source) {
    $this->map($source);
  }

}
