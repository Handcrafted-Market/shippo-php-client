<?php

namespace Handcrafted\Shippo\Resource;

class CustomsItem extends ObjectUpdatedResourceBase {

  /**
   * @var string
   */
  protected $objectState;

  /**
   * @var string
   */
  protected $description;

  /**
   * @var int
   */
  protected $quantity;

  /**
   * @var string
   */
  protected $netWeight;

  /**
   * @var string
   */
  protected $massUnit;

  /**
   * @var string
   */
  protected $valueAmount;

  /**
   * @var string
   */
  protected $valueCurrency;

  /**
   * @var string
   */
  protected $tarifNumber;

  /**
   * @var string|null
   */
  protected $skuCode;

  /**
   * @var string
   */
  protected $originCountry;

  /**
   * @var string
   */
  protected $eccnEar99;

  /**
   * @var string
   */
  protected $metadata;

  /**
   * @var bool
   */
  protected $test;

}