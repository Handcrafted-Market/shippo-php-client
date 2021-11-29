<?php

namespace Handcrafted\Shippo\Resource;

use Handcrafted\Shippo\Meta\Message;

class Transaction extends ResourceBase {

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

  public readonly $objectState;

  public readonly $status;

  public readonly $test;

  public readonly $rate;

  public readonly $trackingNumber;

  public readonly $trackingStatus;

  public readonly $trackingUrlProvided;

  public readonly $eta;

  public readonly $labelUrl;

  public readonly $commercialInvoiceUrl;

  public readonly $metadata;

  public readonly $messages;

  public readonly $qrCodeUrl;

  public function __construct($data) {
    parent::__construct($data);
    $this->messages = array_map(fn($m) => new Message($m), $data->messages);

  }


}