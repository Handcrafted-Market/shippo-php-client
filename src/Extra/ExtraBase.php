<?php

namespace Handcrafted\Shippo\Extra;

class ExtraBase {

  /**
   * Cast the object to an array.
   *
   * Not sure whether this is really needed, since the docs
   * say the extras are "objects" but that may not be supported
   * by guzzle. Need testing.
   *
   * @return array
   */
  public function toArray(): array {
    return (array) $this;
  }

}