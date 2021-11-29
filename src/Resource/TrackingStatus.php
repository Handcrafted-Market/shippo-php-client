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


}