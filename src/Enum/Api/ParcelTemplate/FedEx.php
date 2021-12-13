<?php namespace Handcrafted\Shippo\Enum\Api\ParcelTemplate;

use Handcrafted\Shippo\Enum\DistanceUnit;

final class FedEx extends ImitationEnum implements ParcelProviderInterface {

  public static function listAllParcelTemplates(): array {
    $methods = get_class_methods('Handcrafted\Shippo\Enum\Api\ParcelTemplate\FedEx');
    $results = [];
    foreach ($methods as $method) {
      if ($method === 'listAllParcelTemplates') {
        continue;
      }
      $results[] = self::{$method}();
    }
    return $results;
  }

  public static function box10kg() {
    return new ParcelTemplate('FedEx_Box_10kg', 'FedEx® 10kg Box', new ParcelDimensions(15.81, 12.94, 10.19, DistanceUnit::IN));
  }

  public static function box25kg() {
    return new ParcelTemplate('FedEx_Box_25kg', 'FedEx® 25kg Box', new ParcelDimensions(54.80, 42.10, 33.50, DistanceUnit::IN));
  }

  public static function boxExtraLarge1() {
    return new ParcelTemplate('FedEx_Box_Extra_Large_1', 'FedEx® Extra Large Box (X1)', new ParcelDimensions(11.88, 11.00, 10.75, DistanceUnit::IN));
  }

  public static function boxExtraLarge2() {
    return new ParcelTemplate('FedEx_Box_Extra_Large_2', 'FedEx® Extra Large Box (X2)', new ParcelDimensions(15.75, 14.13, 6.00, DistanceUnit::IN));
  }

  public static function boxLarge1() {
    return new ParcelTemplate('FedEx_Box_Large_1', 'FedEx® Large Box (L1)', new ParcelDimensions(17.50, 12.38, 3.00, DistanceUnit::IN));
  }

  public static function boxLarge2() {
    return new ParcelTemplate('FedEx_Box_Large_2', 'FedEx® Large Box (L2)', new ParcelDimensions(11.25, 8.75, 7.75, DistanceUnit::IN));
  }

  public static function boxMedium1() {
    return new ParcelTemplate('FedEx_Box_Medium_1', 'FedEx® Medium Box (M1)', new ParcelDimensions(13.25, 11.50, 2.38, DistanceUnit::IN));
  }

  public static function boxMedium2() {
    return new ParcelTemplate('FedEx_Box_Medium_2', 'FedEx® Medium Box (M2)', new ParcelDimensions(11.25, 8.75, 4.38, DistanceUnit::IN));
  }

  public static function boxSmall1() {
    return new ParcelTemplate('FedEx_Box_Small_1', 'FedEx® Small Box (S1)', new ParcelDimensions(12.38, 10.88, 1.50, DistanceUnit::IN));
  }

  public static function boxSmall2() {
    return new ParcelTemplate('FedEx_Box_Small_2', 'FedEx® Small Box (S2)', new ParcelDimensions(11.25, 8.75, 4.38, DistanceUnit::IN));
  }

  public static function envelope() {
    return new ParcelTemplate('FedEx_Envelope', 'FedEx® Envelope', new ParcelDimensions(12.50, 9.50, 0.80, DistanceUnit::IN));
  }

  public static function paddedPak() {
    return new ParcelTemplate('FedEx_Padded_Pak', 'FedEx® Padded Pak', new ParcelDimensions(11.75, 14.75, 2.00, DistanceUnit::IN));
  }

  public static function pak1() {
    return new ParcelTemplate('FedEx_Pak_1', 'FedEx® Large Pak', new ParcelDimensions(15.50, 12.00, 0.80, DistanceUnit::IN));
  }

  public static function pak2() {
    return new ParcelTemplate('FedEx_Pak_2', 'FedEx® Small Pak', new ParcelDimensions(12.75, 10.25, 0.80, DistanceUnit::IN));
  }

  public static function tube() {
    return new ParcelTemplate('FedEx_Tube', 'FedEx® Tube', new ParcelDimensions(38.00, 6.00, 6.00, DistanceUnit::IN));
  }

  public static function xlPak() {
    return new ParcelTemplate('FedEx_XL_Pak', 'FedEx® Extra Large Pak', new ParcelDimensions(17.50, 20.75, 2.00, DistanceUnit::IN));
  }

}