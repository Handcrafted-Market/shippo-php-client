<?php

namespace Handcrafted\Shippo\Resource;

use Handcrafted\Shippo\Enum\Api\Carrier;
use Handcrafted\Shippo\MapperTrait;
use Handcrafted\Shippo\Meta\AddressSimple;
use Handcrafted\Shippo\Meta\ServiceLevelSimple;
use Handcrafted\Shippo\Meta\TrackingStatus;

class Webhook {

  use MapperTrait;

  /** @var \Handcrafted\Shippo\Meta\Message[] */
  public readonly array $messages;

  public readonly Carrier $carrier;

  public readonly string $trackingNumber;

  public readonly AddressSimple $addressFrom;

  public readonly AddressSimple $addressTo;

  public readonly string $eta;

  public readonly string $originalEta;

  public readonly ServiceLevelSimple $serviceLevel;

  public readonly string $metadata;

  public readonly TrackingStatus $trackingStatus;

  /** @var TrackingStatus[] */
  public readonly array $trackingHistory;

  public readonly ?string $transaction;

  public readonly bool $test;

  public function __construct(\stdClass $source) {
    $this->carrier = Carrier::from($source->carrier);
    $this->addressFrom = new AddressSimple($source->address_from);
    $this->addressTo = new AddressSimple($source->address_to);
    $this->serviceLevel = new ServiceLevelSimple($source->servicelevel);
    $this->trackingStatus = new TrackingStatus($source->tracking_status);
    $this->trackingHistory = array_map(fn(\stdClass $x) => new TrackingStatus($x), $source->tracking_history);
    $this->map($source);
  }

}