<?php

namespace Handcrafted\Shippo;

use Handcrafted\Shippo\Service\Address;
use Handcrafted\Shippo\Service\Batch;
use Handcrafted\Shippo\Service\CarrierAccount;
use Handcrafted\Shippo\Service\CustomsDeclaration;
use Handcrafted\Shippo\Service\CustomsItem;
use Handcrafted\Shippo\Service\Manifest;
use Handcrafted\Shippo\Service\Order;
use Handcrafted\Shippo\Service\Parcel;
use Handcrafted\Shippo\Service\Pickup;
use Handcrafted\Shippo\Service\Rate;
use Handcrafted\Shippo\Service\Refund;
use Handcrafted\Shippo\Service\Shipment;
use Handcrafted\Shippo\Service\TrackingStatus;
use Handcrafted\Shippo\Service\Transaction;

class Client extends ClientBase {

  public readonly Address $address;

  public readonly Batch $batch;

  public readonly CarrierAccount $carrierAccount;

  public readonly CustomsItem $customsItem;

  public readonly CustomsDeclaration $customsDeclaration;

  public readonly Manifest $manifest;

  public readonly Order $order;

  public readonly Parcel $parcel;

  public readonly Pickup $pickup;

  public readonly Rate $rate;

  public readonly Refund $refund;

  public readonly Shipment $shipment;

  public readonly TrackingStatus $trackingStatus;

  public readonly Transaction $transaction;

  public readonly string $apiVersion;

  public function __construct(string $api_token) {
    $this->apiVersion = '2018-02-08';
    parent::__construct($api_token);
    $this->address = new Address($this);
    $this->batch = new Batch($this);
    $this->carrierAccount = new CarrierAccount($this);
    $this->customsItem = new CustomsItem($this);
    $this->customsDeclaration = new CustomsDeclaration($this);
    $this->manifest = new Manifest($this);
    $this->order = new Order($this);
    $this->parcel = new Parcel($this);
    $this->pickup = new Pickup($this);
    $this->rate = new Rate($this);
    $this->refund = new Refund($this);
    $this->shipment = new Shipment($this);
    $this->trackingStatus = new TrackingStatus($this);
    $this->transaction = new Transaction($this);
  }

}
