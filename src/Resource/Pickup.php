<?php

namespace Handcrafted\Shippo\Resource;

use Handcrafted\Shippo\Enum\PickupStatus;
use Handcrafted\Shippo\MapperTrait;
use Handcrafted\Shippo\Meta\Location;
use Handcrafted\Shippo\Meta\Message;

class Pickup implements ResourceInterface {

  use MapperTrait;

  public readonly string $objectCreated;

  public readonly string $objectUpdated;

  public readonly string $objectId;

  public readonly string $carrierAccount;

  public readonly Location $location;

  /**
   * @var string[]
   */
  public readonly array $transactions;

  public readonly string $requestedStartTime;

  public readonly string $requestedEndTime;

  public readonly string $confirmedStartTime;

  public readonly string $confirmedEndTime;

  public readonly string $cancelByTime;

  public readonly PickupStatus $status;

  public readonly string $confirmationCode;

  public readonly string $timezone;

  /**
   * @var \Handcrafted\Shippo\Meta\Message[]
   */
  public readonly array $messages;

  public readonly string $metadata;

  public readonly bool $isTest;

  public function __construct(\stdClass $source) {
    $this->location = new Location($source->location);
    $this->messages = array_map(fn($m) => new Message($m), $source->messages);
    $this->status = PickupStatus::from($source->status);
    $this->map($source);
  }

}