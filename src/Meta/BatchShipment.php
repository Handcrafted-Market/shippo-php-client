<?php

namespace Handcrafted\Shippo\Meta;

class BatchShipment extends \Handcrafted\Shippo\Mapper {

  public readonly string $metadata;

  public readonly string $carrierAccount;

  public readonly string $servicelevelToken;

  public readonly string $shipment;

  public readonly string $transaction;

  /**
   * @var \Handcrafted\Shippo\Meta\Message[]
   */
  public readonly array $messages;

}