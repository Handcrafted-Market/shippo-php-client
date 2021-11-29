<?php

namespace Handcrafted\Shippo\Resource;

class Manifest extends ResourceBase {

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
   * @var \Handcrafted\Shippo\Meta\ManifestError[]
   */
  public readonly array $errors;

  /**
   * @var string
   */
  public readonly string $carrierAccount;

  /**
   * @var string
   */
  public readonly string $shipmentDate;

  /**
   * @var string
   */
  public readonly string $addressFrom;

  /**
   * @var string
   */
  public readonly string $addressTo;

  /**
   * @var string[]
   */
  public readonly array $transctions;

  /**
   * @var array[]
   */
  public readonly array $documents;

}