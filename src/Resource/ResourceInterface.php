<?php

namespace Handcrafted\Shippo\Resource;

interface ResourceInterface {

  /**
   * Maps the stdClass properties to the instance properties.
   *
   * @see https://stackoverflow.com/a/12159239/1471267
   *
   * @param \stdClass $source
   *   The stdClass from the request response.
   */
  function map(\stdClass $source);

}