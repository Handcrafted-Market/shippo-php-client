<?php

namespace Handcrafted\Shippo\Resource;

use Handcrafted\Shippo\Meta\Message;

class Shipment extends ResourceBase {

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

  /**
   * @var string
   */
  public readonly string $objectUpdated;

  /**
   * @var string
   */
  public readonly $status;

  /**
   * @var \Handcrafted\Shippo\Resource\Address
   */
  public readonly $addressFrom;

  /**
   * @var \Handcrafted\Shippo\Resource\Address
   */
  public readonly $addressTo;

  /**
   * @var \Handcrafted\Shippo\Resource\Address
   */
  public readonly $addressReturn;

  /**
   * @var \Handcrafted\Shippo\Resource\Parcel[]
   */
  public readonly $parcels;

  /**
   * @var string
   */
  public readonly $shipmentDate;

  /**
   * @var \stdClass
   */
  public readonly $extra;

  /**
   * @var \Handcrafted\Shippo\Resource\Address|null
   */
  public readonly $alternateAddressTo;

  /**
   * @var mixed|null - The docs don't describe this.
   */
  public readonly $customsDeclaration;

  /**
   * @var \Handcrafted\Shippo\Resource\Rate[]
   */
  public readonly $rates;

  /**
   * @var array
   */
  public readonly $carrierAccounts;

  /**
   * @var \Handcrafted\Shippo\Meta\Message[]
   */
  public readonly $messages;

  /**
   * @var string|mixed
   */
  public readonly $metadata;

  /**
   * @var bool
   */
  public readonly $test;

  public function __construct($data) {
    $this->addressFrom = new Address($data->address_from);
    $this->addressTo = new Address($data->address_to);
    $this->addressReturn = new Address($data->address_return);
    $this->parcels = array_map(function ($p) {
      return new Parcel($p);
    }, $data->parcels);

    if ($this->alternateAddressTo) {
      $this->alternateAddressTo = new Address($data->alternate_address_to);
    }

    $this->rates = array_map(function ($r) {
      return new Rate($r);
    }, $data->rates);

    $this->messages = array_map(function ($m) {
      return new Message($m);
    }, $data->messages);

    parent::__construct($data);
  }

}
