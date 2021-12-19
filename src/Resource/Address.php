<?php

namespace Handcrafted\Shippo\Resource;

use Handcrafted\Shippo\MapperTrait;
use Handcrafted\Shippo\Meta\ValidationResult;

class Address implements ResourceInterface {

  use MapperTrait;

  /**
   * @var string|null
   */
  public readonly string $objectId;

  /**
   * @var \Handcrafted\Shippo\Meta\ValidationResult|null
   */
  public readonly ?ValidationResult $validationResults;

  /**
   * @var string
   */
  public readonly string $name;

  /**
   * @var string
   */
  public readonly string $company;

  /**
   * @var string
   */
  public readonly string $streetNo;

  /**
   * @var string
   */
  public readonly string $street1;

  /**
   * @var string
   */
  public readonly string $street2;

  /**
   * @var string
   */
  public readonly string $street3;

  /**
   * @var string
   */
  public readonly string $city;

  /**
   * @var string
   */
  public readonly string $state;

  /**
   * @var string
   */
  public readonly string $zip;

  /**
   * @var string
   */
  public readonly string $country;

  /**
   * @var string
   */
  public readonly string $phone;

  /**
   * @var string
   */
  public readonly string $email;

  /**
   * @var string|null
   */
  public readonly ?string $isResidential;

  public function __construct(\stdClass $source) {
    // Cast to an array to check if empty, because there
    // isn't really a concept of an empty object.
    $this->validationResults = !empty((array) $source->validation_results)
      ? new ValidationResult($source->validation_results)
      : NULL;
    $this->map($source);
  }

}
