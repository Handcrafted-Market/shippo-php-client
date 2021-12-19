<?php

namespace Handcrafted\Shippo\Resource;

use Handcrafted\Shippo\Enum\ManifestStatus;
use Handcrafted\Shippo\MapperTrait;
use Handcrafted\Shippo\Meta\ManifestError;

class Manifest implements ResourceInterface {

  use MapperTrait;

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

  public readonly ManifestStatus $status;

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
  public readonly array $transactions;

  /**
   * @var string[]
   */
  public readonly array $documents;

  public function __construct(\stdClass $source) {
    $this->errors = array_map(fn($me) => new ManifestError($me), $source->errors);
    $this->status = ManifestStatus::from($source->status);
    $this->map($source);
  }

}