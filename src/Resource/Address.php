<?php

namespace handcrafted\shippo\Resource;

class Address extends ResourceBase {

  /**
   * @var string|null
   */
  protected $objectId;

  /**
   * @var \handcrafted\shippo\Resource\ValidationResult|null
   */
  protected $validationResults;

  /**
   * @var string
   */
  protected $name;

  /**
   * @var string
   */
  protected $company;

  /**
   * @var string
   */
  protected $streetNo;

  /**
   * @var string
   */
  protected $street1;

  /**
   * @var string
   */
  protected $street2;

  /**
   * @var string
   */
  protected $street3;

  /**
   * @var string
   */
  protected $city;

  /**
   * @var string
   */
  protected $state;

  /**
   * @var string
   */
  protected $zip;

  /**
   * @var string
   */
  protected $country;

  /**
   * @var string
   */
  protected $phone;

  /**
   * @var string
   */
  protected $email;

  /**
   * @var string|null
   */
  protected $isResidential;

}
