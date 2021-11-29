<?php

namespace Handcrafted\Shippo\Resource;

class Transaction extends ResourceBase {

  protected $objectState;

  protected $status;

  protected $objectCreated;

  protected $objectId;

  protected $objectOwner;

  protected $test;

  protected $rate;

  protected $trackingNumber;

  protected $trackingStatus;

  protected $trackingUrlProvided;

  protected $eta;

  protected $labelUrl;

  protected $commercialInvoiceUrl;

  protected $metadata;

  protected $messages;

  protected $qrCodeUrl;

  public function __construct($data) {
    parent::__construct($data);
    $this->messages = array_map(fn($m) => new Message($m), $data->messages);

  }


}