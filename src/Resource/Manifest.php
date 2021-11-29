<?php

namespace Handcrafted\Shippo\Resource;

class Manifest extends ObjectUpdatedResourceBase {

  /**
   * @var string
   */
  protected string $status;

  /**
   * @var \Handcrafted\Shippo\Meta\ManifestError[]
   */
  protected array $errors;

  /**
   * @var string
   */
  protected string $carrierAccount;

  /**
   * @var string
   */
  protected string $shipmentDate;

  /**
   * @var string
   */
  protected string $addressFrom;

  /**
   * @var string
   */
  protected string $addressTo;

  /**
   * @var string[]
   */
  protected array $transctions;

  /**
   * @var array[]
   */
  protected array $documents;

}