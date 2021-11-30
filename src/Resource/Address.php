<?php

namespace Handcrafted\Shippo\Resource;

use Handcrafted\Shippo\Meta\ValidationResult;

class Address extends ResourceBase {

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
    $this->validationResults = new ValidationResult($source->validation_results);
    parent::__construct($source);
  }

}
