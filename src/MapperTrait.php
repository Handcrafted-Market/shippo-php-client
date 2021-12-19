<?php

namespace Handcrafted\Shippo;

trait MapperTrait {

  /**
   * Maps the stdClass properties to the instance properties.
   *
   * @see https://stackoverflow.com/a/12159239/1471267
   *
   * @param \stdClass $source
   *   The stdClass from the request response.
   */
  private function map(\stdClass $source) {
    $sourceReflection = new \ReflectionObject($source);
    $sourceProperties = $sourceReflection->getProperties();
    foreach ($sourceProperties as $sourceProperty) {
      $name = $sourceProperty->getName();
      $nameCamel = $this->toCamelCase($name);

      // Since everything is built on readonly props,
      // we need to make sure that we don't attempt
      // to write to pre-set properties.
      try {
        $this->{$nameCamel} = $source->$name;
      }
      catch (\Error $e) {
        continue;
      }
    }
  }

  /**
   * Converts a string to camelCase.
   *
   * @param $str
   *   The string.
   * @param array $noStrip
   *   Any chars to ignore.
   *
   * @return string
   *   The camelCased string.
   *
   * @see http://www.mendoweb.be/blog/php-convert-string-to-camelcase-string/
   *
   */
  private function toCamelCase($str, array $noStrip = []) {
    // non-alpha and non-numeric characters become spaces
    $str = preg_replace('/[^a-z0-9' . implode("", $noStrip) . ']+/i', ' ', $str);
    $str = trim($str);
    // uppercase the first character of each word
    $str = ucwords($str);
    $str = str_replace(" ", "", $str);
    return lcfirst($str);
  }

}