<?php

namespace HandcraftedShippo\Resource;

class Shipment extends ResourceBase {

  /**
   * @var string
   */
  protected $objectCreated;

  /**
   * @var string
   */
  protected $objectUpdated;

  /**
   * @var string
   */
  protected $objectId;

  /**
   * @var string
   */
  protected $objectOwner;

  /**
   * @var string
   */
  protected $status;

  /**
   * @var \HandcraftedShippo\Resource\Address
   */
  protected $addressFrom;

  /**
   * @var \HandcraftedShippo\Resource\Address
   */
  protected $addressTo;

  /**
   * @var \HandcraftedShippo\Resource\Address
   */
  protected $addressReturn;

  /**
   * @var \HandcraftedShippo\Resource\Parcel[]
   */
  protected $parcels;

  /**
   * @var string
   */
  protected $shipmentDate;

  /**
   * @var \stdClass
   */
  protected $extra;

  /**
   * @var \HandcraftedShippo\Resource\Address|null
   */
  protected $alternateAddressTo;

  /**
   * @var mixed|null - The docs don't describe this.
   */
  protected $customsDeclaration;

  /**
   * @var \HandcraftedShippo\Resource\Rate[]
   */
  protected $rates;

  /**
   * @var array
   */
  protected $carrierAccounts;

  /**
   * @var \HandcraftedShippo\Resource\Message[]
   */
  protected $messages;

  /**
   * @var string|mixed
   */
  protected $metadata;

  /**
   * @var bool
   */
  protected $test;

  public function __construct($data) {
    parent::__construct($data);
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

  }

  public function getObjectCreated() {
    return $this->objectCreated;
  }

  public function getObjectUpdated() {
    return $this->objectUpdated;
  }

  public function getObjectId() {
    return $this->objectId;
  }

  public function getObjectOwner() {
    return $this->objectOwner;
  }

  public function getStatus() {
    return $this->status;
  }

  public function getAddressFrom() {
    return $this->addressFrom;
  }

  public function getAddressTo() {
    return $this->addressTo;
  }

  public function getAddressReturn() {
    return $this->addressReturn;
  }

  public function getParcels() {
    return $this->parcels;
  }

  public function getShipmentDate() {
    return $this->shipmentDate;
  }

  public function getExtra() {
    return $this->extra;
  }

  public function getAlternateAddressTo() {
    return $this->alternateAddressTo;
  }

  public function getCustomsDeclaration() {
    return $this->customsDeclaration;
  }

  public function getRates() {
    return $this->rates;
  }

  public function getCarrierAccounts() {
    return $this->carrierAccounts;
  }

  public function getMessages() {
    return $this->messages;
  }

  public function getMetadata() {
    return $this->metadata;
  }

  public function getTest() {
    return $this->test;
  }

}
