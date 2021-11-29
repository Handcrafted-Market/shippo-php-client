<?php

namespace Handcrafted\Shippo\Resource;

abstract class ObjectUpdatedResourceBase extends ObjectResourceBase {

  /**
   * @var string
   */
  protected string $objectUpdated;
  
  public function updated(): string {
    return $this->objectUpdated;
  }

}