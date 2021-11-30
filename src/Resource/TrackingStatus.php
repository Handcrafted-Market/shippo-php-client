<?php

namespace Handcrafted\Shippo\Resource;

use Handcrafted\Shippo\Meta\AddressStub;
use Handcrafted\Shippo\Meta\ServiceLevel;

class TrackingStatus extends ResourceBase {

  public readonly string $carrier;

  public readonly string $trackingNumber;

  public readonly AddressStub $addressFrom;

  public readonly AddressStub $addressTo;

  public readonly string $transaction;

  public readonly string $eta;

  public readonly string $originalEta;

  public readonly ServiceLevel $serviceLevel;

  /**
   * @var mixed
   */
  public readonly $metadata;

  public readonly \Handcrafted\Shippo\Meta\TrackingStatus $trackingStatus;

  /**
   * @var \Handcrafted\Shippo\Meta\TrackingStatus[]
   */
  public readonly array $trackingHistory;

  public function __construct(\stdClass $source) {
    $this->addressFrom = new AddressStub($source->address_from);
    $this->addressTo = new AddressStub($source->address_to);
    $this->serviceLevel = new ServiceLevel($source->serviceLevel);
    $this->trackingStatus = new \Handcrafted\Shippo\Meta\TrackingStatus($source->tracking_status);
    $this->trackingHistory = array_map(fn($ts) => new \Handcrafted\Shippo\Meta\TrackingStatus($ts), $source->tracking_history);

    parent::__construct($source);
  }

}