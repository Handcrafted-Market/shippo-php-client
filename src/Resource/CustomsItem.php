<?php

namespace Handcrafted\Shippo\Resource;

class CustomsItem extends ObjectUpdatedResourceBase {

  /**
   * @var string
   */
  public readonly $objectState;

  /**
   * @var string
   */
  public readonly $description;

  /**
   * @var int
   */
  public readonly $quantity;

  /**
   * @var string
   */
  public readonly $netWeight;

  /**
   * @var string
   */
  public readonly $massUnit;

  /**
   * @var string
   */
  public readonly $valueAmount;

  /**
   * @var string
   */
  public readonly $valueCurrency;

  /**
   * @var string
   */
  public readonly $tarifNumber;

  /**
   * @var string|null
   */
  public readonly $skuCode;

  /**
   * @var string
   */
  public readonly $originCountry;

  /**
   * @var string
   */
  public readonly $eccnEar99;

  /**
   * @var string
   */
  public readonly $metadata;

  /**
   * @var bool
   */
  public readonly $test;

}