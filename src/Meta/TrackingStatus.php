<?php

namespace Handcrafted\Shippo\Meta;

use Handcrafted\Shippo\Enum\TrackingSubStatusCode;
use Handcrafted\Shippo\MapperTrait;
use Meta\TrackingSubStatus;

/**
 * The "tracking status" resource has "tracking_status"
 * and "tracking_history" properties with this struct.
 */
class TrackingStatus {

  use MapperTrait;

  public readonly string $objectCreated;

  public readonly string $objectUpdated;

  public readonly string $objectId;

  public readonly \Handcrafted\Shippo\Enum\TrackingStatus $status;

  public readonly string $statusDetails;

  public readonly string $statusDate;

  public readonly ?TrackingSubStatusCode $subStatus;

  public readonly ?AddressSimple $location;

  public function __construct(\stdClass $source) {
    $this->location = !empty($this->location)
      ? new AddressSimple($source->location)
      : NULL;
    $this->status = \Handcrafted\Shippo\Enum\TrackingStatus::from($source->status);
    $this->subStatus = !empty($source->substatus)
      ? new TrackingSubStatus($source->substatus)
      : NULL;
    $this->map($source);
  }

}
