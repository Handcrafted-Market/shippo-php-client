<?php

namespace Handcrafted\Shippo\Resource;

class CustomsItem extends ResourceBase {

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