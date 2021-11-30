<?php

namespace Handcrafted\Shippo\Meta;

use Handcrafted\Shippo\Mapper;

/**
 * The "tracking status" resource has "tracking_status"
 * and "tracking_history" properties with this struct.
 */
class TrackingStatus extends Mapper {

  public readonly string $objectCreated;

  public readonly string $objectUpdated;

  public readonly string $objectId;

  /**
   * This should probably be an enum.
   *
   * @var string
   */
  public readonly string $status;

  public readonly string $statusDetails;

  public readonly string $statusDate;

  public readonly AddressSimple $location;

  public function __construct(\stdClass $source) {
    $this->location = new AddressSimple($source->location);
    parent::__construct($source);
  }

}