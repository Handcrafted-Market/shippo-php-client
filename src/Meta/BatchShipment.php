<?php

namespace Handcrafted\Shippo\Meta;

use Handcrafted\Shippo\MapperTrait;

class BatchShipment {

  use MapperTrait;

  public readonly string $metadata;

  public readonly string $carrierAccount;

  public readonly string $servicelevelToken;

  public readonly string $shipment;

  public readonly string $transaction;

  /**
   * @var \Handcrafted\Shippo\Meta\Message[]
   */
  public readonly array $messages;

  public function __construct(\stdClass $source) {
    $this->messages = array_map(fn($m) => new Message($m), $source->messages);
    $this->map($source);
  }

}