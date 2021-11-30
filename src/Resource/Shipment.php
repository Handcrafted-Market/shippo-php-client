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
  public readonly string $status;

  /**
   * @var \Handcrafted\Shippo\Resource\Address
   */
  public readonly Address $addressFrom;

  /**
   * @var \Handcrafted\Shippo\Resource\Address
   */
  public readonly Address $addressTo;

  /**
   * @var \Handcrafted\Shippo\Resource\Address
   */
  public readonly Address $addressReturn;

  /**
   * @var \Handcrafted\Shippo\Resource\Parcel[]
   */
  public readonly array $parcels;

  /**
   * @var string
   */
  public readonly string $shipmentDate;

  /**
   * @var \stdClass
   */
  public readonly \stdClass $extra;

  /**
   * @var \Handcrafted\Shippo\Resource\Address|null
   */
  public readonly ?Address $alternateAddressTo;

  public readonly string $customsDeclaration;

  /**
   * @var \Handcrafted\Shippo\Resource\Rate[]
   */
  public readonly array $rates;

  /**
   * @var array
   */
  public readonly array $carrierAccounts;

  /**
   * @var \Handcrafted\Shippo\Meta\Message[]
   */
  public readonly array $messages;

  public readonly string $metadata;

  /**
   * @var bool
   */
  public readonly bool $test;

  public function __construct($data) {
    $this->addressFrom = new Address($data->address_from);
    $this->addressTo = new Address($data->address_to);
    $this->addressReturn = new Address($data->address_return);
    $this->parcels = array_map(function ($p) {
      return new Parcel($p);
    }, $data->parcels);

    if ($data->alternateAddressTo) {
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
