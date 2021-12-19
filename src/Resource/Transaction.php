<?php

namespace Handcrafted\Shippo\Resource;

use Handcrafted\Shippo\MapperTrait;
use Handcrafted\Shippo\Meta\Message;

class Transaction implements ResourceInterface {

  use MapperTrait;

  /**
   * @var string
   */
  public readonly string $objectCreated;

  /**
   * @var string
   */
  public readonly string $objectId;

  /**
   * @var string
   */
  public readonly string $objectOwner;

  public readonly string $objectState;

  public readonly string $status;

  public readonly bool $test;

  public readonly string $rate;

  public readonly string $trackingNumber;

  public readonly string $trackingStatus;

  public readonly string $trackingUrlProvided;

  public readonly string $eta;

  public readonly string $labelUrl;

  public readonly string $commercialInvoiceUrl;

  public readonly string $metadata;

  /**
   * @var \Handcrafted\Shippo\Meta\Message[]
   */
  public readonly array $messages;

  public readonly string $qrCodeUrl;

  public function __construct($source) {
    $this->messages = array_map(fn($m) => new Message($m), $source->messages);
    $this->map($source);
  }


}