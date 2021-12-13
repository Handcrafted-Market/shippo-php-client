<?php namespace Handcrafted\Shippo\Enum\Api\ParcelTemplate;

use Handcrafted\Shippo\Enum\DistanceUnit;

final class FastwayAustralia extends ImitationEnum implements ParcelProviderInterface {

  public static function listAllParcelTemplates(): array {
    $methods = get_class_methods('Handcrafted\Shippo\Enum\Api\ParcelTemplate\Fastway Australia');
    $results = [];
    foreach ($methods as $method) {
      if ($method === 'listAllParcelTemplates') {
        continue;
      }
      $results[] = self::{$method}();
    }
    return $results;
  }

  public static function satchelA2() {
    return new ParcelTemplate('Fastway_Australia_Satchel_A2', 'Satchel A2', new ParcelDimensions(594.00, 420.00, 48.00, DistanceUnit::MM));
  }

  public static function satchelA3() {
    return new ParcelTemplate('Fastway_Australia_Satchel_A3', 'Satchel A3', new ParcelDimensions(420.00, 297.00, 64.00, DistanceUnit::MM));
  }

  public static function satchelA4() {
    return new ParcelTemplate('Fastway_Australia_Satchel_A4', 'Satchel A4', new ParcelDimensions(297.00, 210.00, 64.00, DistanceUnit::MM));
  }

  public static function satchelA5() {
    return new ParcelTemplate('Fastway_Australia_Satchel_A5', 'Satchel A5', new ParcelDimensions(210.00, 148.00, 64.00, DistanceUnit::MM));
  }

}