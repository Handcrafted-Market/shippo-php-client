<?php

namespace Handcrafted\Shippo\Resource;

abstract class ObjectUpdatedResourceBase extends ObjectResourceBase {

  /**
   * @var string
   */
  public readonly string $objectUpdated;

  public function updated(): string {
    return $this->objectUpdated;
  }

}