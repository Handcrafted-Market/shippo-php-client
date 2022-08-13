<?php

namespace Handcrafted\Shippo\Meta;

use Handcrafted\Shippo\Enum\TrackingSubStatus;
use Handcrafted\Shippo\MapperTrait;

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

  public readonly ?TrackingSubStatus $subStatus;

  public readonly AddressSimple $location;

  public function __construct(\stdClass $source) {
    $this->location = new AddressSimple($source->location);
    $this->status = \Handcrafted\Shippo\Enum\TrackingStatus::from($source->status);
    $this->subStatus = property_exists($source, 'substatus')
      ? TrackingSubStatus::from($source->substatus)
      : NULL;
    $this->map($source);
  }

}