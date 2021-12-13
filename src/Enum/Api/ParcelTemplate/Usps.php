<?php namespace Handcrafted\Shippo\Enum\Api\ParcelTemplate;

use Handcrafted\Shippo\Enum\DistanceUnit;

final class Usps extends ImitationEnum implements ParcelProviderInterface {

  public static function listAllParcelTemplates(): array {
    $methods = get_class_methods('Handcrafted\Shippo\Enum\Api\ParcelTemplate\USPS');
    $results = [];
    foreach ($methods as $method) {
      if ($method === 'listAllParcelTemplates') {
        continue;
      }
      $results[] = self::{$method}();
    }
    return $results;
  }

  public static function flatRateCardboardEnvelope() {
    return new ParcelTemplate('USPS_FlatRateCardboardEnvelope', 'Flat Rate Cardboard Envelope', new ParcelDimensions(12.50, 9.50, 0.75, DistanceUnit::IN));
  }

  public static function flatRateEnvelope() {
    return new ParcelTemplate('USPS_FlatRateEnvelope', 'Flat Rate Envelope', new ParcelDimensions(12.50, 9.50, 0.75, DistanceUnit::IN));
  }

  public static function flatRateGiftCardEnvelope() {
    return new ParcelTemplate('USPS_FlatRateGiftCardEnvelope', 'Flat Rate Gift Card Envelope', new ParcelDimensions(10.00, 7.00, 0.75, DistanceUnit::IN));
  }

  public static function flatRateLegalEnvelope() {
    return new ParcelTemplate('USPS_FlatRateLegalEnvelope', 'Flat Rate Legal Envelope', new ParcelDimensions(15.00, 9.50, 0.75, DistanceUnit::IN));
  }

  public static function flatRatePaddedEnvelope() {
    return new ParcelTemplate('USPS_FlatRatePaddedEnvelope', 'Flat Rate Padded Envelope', new ParcelDimensions(12.50, 9.50, 1.00, DistanceUnit::IN));
  }

  public static function flatRateWindowEnvelope() {
    return new ParcelTemplate('USPS_FlatRateWindowEnvelope', 'Flat Rate Window Envelope', new ParcelDimensions(10.00, 5.00, 0.75, DistanceUnit::IN));
  }

  public static function irregularParcel() {
    return new ParcelTemplate('USPS_IrregularParcel', 'Irregular Parcel', new ParcelDimensions(0.00, 0.00, 0.00, DistanceUnit::IN));
  }

  public static function largeFlatRateBoardGameBox() {
    return new ParcelTemplate('USPS_LargeFlatRateBoardGameBox', 'Large Flat Rate Board Game Box', new ParcelDimensions(24.06, 11.88, 3.13, DistanceUnit::IN));
  }

  public static function largeFlatRateBox() {
    return new ParcelTemplate('USPS_LargeFlatRateBox', 'Large Flat Rate Box', new ParcelDimensions(12.25, 12.25, 6.00, DistanceUnit::IN));
  }

  public static function aPOFlatRateBox() {
    return new ParcelTemplate('USPS_APOFlatRateBox', 'APO/FPO/DPO Large Flat Rate Box', new ParcelDimensions(12.25, 12.25, 6.00, DistanceUnit::IN));
  }

  public static function largeVideoFlatRateBox() {
    return new ParcelTemplate('USPS_LargeVideoFlatRateBox', 'Flat Rate Large Video Box (Int\'l only)', new ParcelDimensions(9.60, 6.40, 2.20, DistanceUnit::IN));
  }

  public static function mediumFlatRateBox1() {
    return new ParcelTemplate('USPS_MediumFlatRateBox1', 'Medium Flat Rate Box 1', new ParcelDimensions(11.25, 8.75, 6.00, DistanceUnit::IN));
  }

  public static function mediumFlatRateBox2() {
    return new ParcelTemplate('USPS_MediumFlatRateBox2', 'Medium Flat Rate Box 2', new ParcelDimensions(14.00, 12.00, 3.50, DistanceUnit::IN));
  }

  public static function regionalRateBoxA1() {
    return new ParcelTemplate('USPS_RegionalRateBoxA1', 'Regional Rate Box A1', new ParcelDimensions(10.13, 7.13, 5.00, DistanceUnit::IN));
  }

  public static function regionalRateBoxA2() {
    return new ParcelTemplate('USPS_RegionalRateBoxA2', 'Regional Rate Box A2', new ParcelDimensions(13.06, 11.06, 2.50, DistanceUnit::IN));
  }

  public static function regionalRateBoxB1() {
    return new ParcelTemplate('USPS_RegionalRateBoxB1', 'Regional Rate Box B1', new ParcelDimensions(12.25, 10.50, 5.50, DistanceUnit::IN));
  }

  public static function regionalRateBoxB2() {
    return new ParcelTemplate('USPS_RegionalRateBoxB2', 'Regional Rate Box B2', new ParcelDimensions(16.25, 14.50, 3.00, DistanceUnit::IN));
  }

  public static function smallFlatRateBox() {
    return new ParcelTemplate('USPS_SmallFlatRateBox', 'Small Flat Rate Box', new ParcelDimensions(8.69, 5.44, 1.75, DistanceUnit::IN));
  }

  public static function smallFlatRateEnvelope() {
    return new ParcelTemplate('USPS_SmallFlatRateEnvelope', 'Small Flat Rate Envelope', new ParcelDimensions(10.00, 6.00, 4.00, DistanceUnit::IN));
  }
  
  //  public static function softPack() {
  //    return new ParcelTemplate('USPS_SoftPack', 'Soft Pack Padded Envelope', new ParcelDimensions(Length and width defined in the Parcel , , , DistanceUnit::)); }

}