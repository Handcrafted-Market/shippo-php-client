<?php namespace Handcrafted\Shippo\Enum\Api\ParcelTemplate;

use Handcrafted\Shippo\Enum\DistanceUnit;

final class CouriersPlease extends ImitationEnum implements ParcelProviderInterface {

  public static function listAllParcelTemplates(): array {
    $methods = get_class_methods('Handcrafted\Shippo\Enum\Api\ParcelTemplate\CouriersPlease');
    $results = [];
    foreach ($methods as $method) {
      if ($method === 'listAllParcelTemplates') {
        continue;
      }
      $results[] = self::{$method}();
    }
    return $results;
  }

  public static function couriersplease500gSatchel() {
    return new ParcelTemplate('couriersplease_500g_satchel', '500g Satchel', new ParcelDimensions(22.00, 33.50, 0.10, DistanceUnit::CM));
  }

  public static function couriersplease1kgSatchel() {
    return new ParcelTemplate('couriersplease_1kg_satchel', '1kg Satchel', new ParcelDimensions(28.00, 35.00, 0.10, DistanceUnit::CM));
  }

  public static function couriersplease3kgSatchel() {
    return new ParcelTemplate('couriersplease_3kg_satchel', '3kg Satchel', new ParcelDimensions(34.00, 42.00, 0.10, DistanceUnit::CM));
  }

  public static function couriersplease5kgSatchel() {
    return new ParcelTemplate('couriersplease_5kg_satchel', '5kg Satchel', new ParcelDimensions(43.70, 59.70, 0.10, DistanceUnit::CM));
  }

}