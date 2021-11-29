<?php

namespace Handcrafted\Shippo\Resource;

class Address extends ResourceBase {

  /**
   * @var string|null
   */
  public readonly $objectId;

  /**
   * @var \Handcrafted\Shippo\Meta\ValidationResult|null
   */
  public readonly $validationResults;

  /**
   * @var string
   */
  public readonly $name;

  /**
   * @var string
   */
  public readonly $company;

  /**
   * @var string
   */
  public readonly $streetNo;

  /**
   * @var string
   */
  public readonly $street1;

  /**
   * @var string
   */
  public readonly $street2;

  /**
   * @var string
   */
  public readonly $street3;

  /**
   * @var string
   */
  public readonly $city;

  /**
   * @var string
   */
  public readonly $state;

  /**
   * @var string
   */
  public readonly $zip;

  /**
   * @var string
   */
  public readonly $country;

  /**
   * @var string
   */
  public readonly $phone;

  /**
   * @var string
   */
  public readonly $email;

  /**
   * @var string|null
   */
  public readonly $isResidential;

}
