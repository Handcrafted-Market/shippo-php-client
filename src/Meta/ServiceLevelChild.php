<?php

namespace Handcrafted\Shippo\Meta;

class ServiceLevelChild extends ServiceLevel {

  public readonly ServiceLevel $parentServicelevel;

  public function __construct(\stdClass $source) {
    $this->parentServicelevel = $source->parent_servicelevel;
    parent::__construct($source);
  }

}
