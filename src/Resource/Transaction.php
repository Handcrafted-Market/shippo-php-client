<?php

namespace Handcrafted\Shippo\Resource;

class Transaction extends ObjectResourceBase {

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