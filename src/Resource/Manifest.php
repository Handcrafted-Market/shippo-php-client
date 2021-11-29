<?php

namespace Handcrafted\Shippo\Resource;

class Manifest extends ObjectUpdatedResourceBase {

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