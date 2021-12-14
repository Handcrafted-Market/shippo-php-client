<?php namespace Handcrafted\Shippo\Enum\Api\ParcelTemplate;

use Handcrafted\Shippo\Enum\DistanceUnit;

final class Ups extends ImitationEnum implements ParcelProviderInterface {

  public static function listAllParcelTemplates(): array {
    $methods = get_class_methods('Handcrafted\Shippo\Enum\Api\ParcelTemplate\UPS');
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
    return new ParcelTemplate('UPS_Box_10kg', 'Box 10kg', new ParcelDimensions(410.00, 335.00, 265.00, DistanceUnit::MM));
  }

  public static function box25kg() {
    return new ParcelTemplate('UPS_Box_25kg', 'Box 25kg', new ParcelDimensions(484.00, 433.00, 350.00, DistanceUnit::MM));
  }

  public static function expressBox() {
    return new ParcelTemplate('UPS_Express_Box', 'Express Box', new ParcelDimensions(460.00, 315.00, 95.00, DistanceUnit::MM));
  }

  public static function expressBoxLarge() {
    return new ParcelTemplate('UPS_Express_Box_Large', 'Express Box Large', new ParcelDimensions(18.00, 13.00, 3.00, DistanceUnit::IN));
  }

  public static function expressBoxMedium() {
    return new ParcelTemplate('UPS_Express_Box_Medium', 'Express Box Medium', new ParcelDimensions(15.00, 11.00, 3.00, DistanceUnit::IN));
  }

  public static function expressBoxSmall() {
    return new ParcelTemplate('UPS_Express_Box_Small', 'Express Box Small', new ParcelDimensions(13.00, 11.00, 2.00, DistanceUnit::IN));
  }

  public static function expressEnvelope() {
    return new ParcelTemplate('UPS_Express_Envelope', 'Express Envelope', new ParcelDimensions(12.50, 9.50, 2.00, DistanceUnit::IN));
  }

  public static function expressHardPak() {
    return new ParcelTemplate('UPS_Express_Hard_Pak', 'Express Hard Pak', new ParcelDimensions(14.75, 11.50, 2.00, DistanceUnit::IN));
  }

  public static function expressLegalEnvelope() {
    return new ParcelTemplate('UPS_Express_Legal_Envelope', 'Express Legal Envelope', new ParcelDimensions(15.00, 9.50, 2.00, DistanceUnit::IN));
  }

  public static function expressPak() {
    return new ParcelTemplate('UPS_Express_Pak', 'Express Pak', new ParcelDimensions(16.00, 12.75, 2.00, DistanceUnit::IN));
  }

  public static function expressTube() {
    return new ParcelTemplate('UPS_Express_Tube', 'Express Tube', new ParcelDimensions(970.00, 190.00, 165.00, DistanceUnit::MM));
  }

  public static function laboratoryPak() {
    return new ParcelTemplate('UPS_Laboratory_Pak', 'Laboratory Pak', new ParcelDimensions(17.25, 12.75, 2.00, DistanceUnit::IN));
  }

  public static function miBPM() {
    return new ParcelTemplate('UPS_MI_BPM', 'BPM (Mail Innovations - Domestic & International)', new ParcelDimensions(0.00, 0.00, 0.00, DistanceUnit::IN));
  }

  public static function miBPMFlat() {
    return new ParcelTemplate('UPS_MI_BPM_Flat', 'BPM Flat (Mail Innovations - Domestic & International)', new ParcelDimensions(0.00, 0.00, 0.00, DistanceUnit::IN));
  }

  public static function miBPMParcel() {
    return new ParcelTemplate('UPS_MI_BPM_Parcel', 'BPM Parcel (Mail Innovations - Domestic & International)', new ParcelDimensions(0.00, 0.00, 0.00, DistanceUnit::IN));
  }

  public static function miFirstClass() {
    return new ParcelTemplate('UPS_MI_First_Class', 'First Class (Mail Innovations - Domestic only)', new ParcelDimensions(0.00, 0.00, 0.00, DistanceUnit::IN));
  }

  public static function miFlat() {
    return new ParcelTemplate('UPS_MI_Flat', 'Flat (Mail Innovations - Domestic only)', new ParcelDimensions(0.00, 0.00, 0.00, DistanceUnit::IN));
  }

  public static function miIrregular() {
    return new ParcelTemplate('UPS_MI_Irregular', 'Irregular (Mail Innovations - Domestic only)', new ParcelDimensions(0.00, 0.00, 0.00, DistanceUnit::IN));
  }

  public static function miMachinable() {
    return new ParcelTemplate('UPS_MI_Machinable', 'Machinable (Mail Innovations - Domestic only)', new ParcelDimensions(0.00, 0.00, 0.00, DistanceUnit::IN));
  }

  public static function miMediaMail() {
    return new ParcelTemplate('UPS_MI_MEDIA_MAIL', 'Media Mail (Mail Innovations - Domestic only)', new ParcelDimensions(0.00, 0.00, 0.00, DistanceUnit::IN));
  }

  public static function miParcelPost() {
    return new ParcelTemplate('UPS_MI_Parcel_Post', 'Parcel Post (Mail Innovations - Domestic only)', new ParcelDimensions(0.00, 0.00, 0.00, DistanceUnit::IN));
  }

  public static function miPriority() {
    return new ParcelTemplate('UPS_MI_Priority', 'Priority (Mail Innovations - Domestic only)', new ParcelDimensions(0.00, 0.00, 0.00, DistanceUnit::IN));
  }

  public static function miStandardFlat() {
    return new ParcelTemplate('UPS_MI_Standard_Flat', 'Standard Flat (Mail Innovations - Domestic only)', new ParcelDimensions(0.00, 0.00, 0.00, DistanceUnit::IN));
  }

  public static function padPak() {
    return new ParcelTemplate('UPS_Pad_Pak', 'Pad Pak', new ParcelDimensions(14.75, 11.00, 2.00, DistanceUnit::IN));
  }

  public static function pallet() {
    return new ParcelTemplate('UPS_Pallet', 'Pallet', new ParcelDimensions(120.00, 80.00, 200.00, DistanceUnit::CM));
  }

}