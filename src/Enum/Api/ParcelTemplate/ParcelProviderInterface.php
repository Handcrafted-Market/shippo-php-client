<?php


namespace Handcrafted\Shippo\Enum\Api\ParcelTemplate;

interface ParcelProviderInterface {

  /**
   * @return \Handcrafted\Shippo\Enum\Api\ParcelTemplate\ParcelTemplate[]
   */
  public static function listAllParcelTemplates(): array;

}
