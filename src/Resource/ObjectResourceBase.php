<?php

namespace Handcrafted\Shippo\Resource;

abstract class ObjectResourceBase extends ResourceBase {

  /**
   * @var string
   */
  protected string $objectCreated;

  /**
   * @var string
   */
  protected string $objectId;

  /**
   * @var string
   */
  protected string $objectOwner;

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