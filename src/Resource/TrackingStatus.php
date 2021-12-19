<?php

namespace Handcrafted\Shippo\Resource;

use Handcrafted\Shippo\MapperTrait;
use Handcrafted\Shippo\Meta\AddressSimple;
use Handcrafted\Shippo\Meta\ServiceLevelSimple;

class TrackingStatus {

  use MapperTrait;

  public readonly string $carrier;

  public readonly string $trackingNumber;

  public readonly AddressSimple $addressFrom;

  public readonly AddressSimple $addressTo;

  public readonly string $transaction;

  public readonly string $eta;

  public readonly string $originalEta;

  public readonly ServiceLevelSimple $serviceLevel;

  public readonly string $metadata;

  public readonly \Handcrafted\Shippo\Meta\TrackingStatus $trackingStatus;

  /**
   * @var \Handcrafted\Shippo\Meta\TrackingStatus[]
   */
  public readonly array $trackingHistory;

  public function __construct(\stdClass $source) {
    $this->addressFrom = new AddressSimple($source->address_from);
    $this->addressTo = new AddressSimple($source->address_to);
    $this->serviceLevel = new ServiceLevelSimple($source->serviceLevel);
    $this->trackingStatus = new \Handcrafted\Shippo\Meta\TrackingStatus($source->tracking_status);
    $this->trackingHistory = array_map(fn($ts) => new \Handcrafted\Shippo\Meta\TrackingStatus($ts), $source->tracking_history);

    $this->map($source);
  }

}