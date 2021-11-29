<?php

namespace Handcrafted\Shippo\Resource;

abstract class ObjectResourceBase extends ResourceBase {

  /**
   * @var string
   */
  public readonly string $objectCreated;

  /**
   * @var string
   */
  public readonly string $objectId;

  /**
   * @var string
   */
  public readonly string $objectOwner;

  public function created(): string {
    return $this->objectCreated;
  }

  public function id(): string {
    return $this->objectId;
  }

  public function owner(): string {
    return $this->objectCreated;
  }

}