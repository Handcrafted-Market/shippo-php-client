<?php

namespace Handcrafted\Shippo\Resource;

use Handcrafted\Shippo\Meta\Location;

class Pickup extends ResourceBase {

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

  public readonly string $status;

  public readonly string $confirmationCode;

  public readonly string $timezone;

  /**
   * @var \Handcrafted\Shippo\Meta\Message[]
   */
  public readonly array $messages;

  public readonly string $metadata;

  public readonly bool $isTest;

}