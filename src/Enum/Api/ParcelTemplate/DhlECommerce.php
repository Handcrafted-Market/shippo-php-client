<?php namespace Handcrafted\Shippo\Enum\Api\ParcelTemplate;

use Handcrafted\Shippo\Enum\DistanceUnit;

final class dhlECommerce extends ImitationEnum implements ParcelProviderInterface {

  public static function listAllParcelTemplates(): array {
    $methods = get_class_methods('Handcrafted\Shippo\Enum\Api\ParcelTemplate\DHL eCommerce');
    $results = [];
    foreach ($methods as $method) {
      if ($method === 'listAllParcelTemplates') {
        continue;
      }
      $results[] = self::{$method}();
    }
    return $results;
  }

  public static function irregular() {
    return new ParcelTemplate('DHLeC_Irregular', 'Irregular Shipment', new ParcelDimensions(10.00, 10.00, 10.00, DistanceUnit::IN));
  }

  public static function smFlats() {
    return new ParcelTemplate('DHLeC_SM_Flats', 'Flats', new ParcelDimensions(27.00, 17.00, 17.00, DistanceUnit::IN));
  }

}