<?php

namespace Handcrafted\Shippo\Resource;

class Rate extends ObjectResourceBase {

  /**
   * @var string
   */
  public readonly $shipment;

  /**
   * @var array
   */
  public readonly $attributes;

  /**
   * @var string
   */
  public readonly $amountLocal;

  /**
   * @var string
   */
  public readonly $currencyLocal;

  /**
   * @var string
   */
  public readonly $amount;

  /**
   * @var string
   */
  public readonly $currency;

  /**
   * @var string
   */
  public readonly $provider;

  /**
   * @var string
   */
  public readonly $providerImage75;

  /**
   * @var string
   */
  public readonly $providerImage200;

  /**
   * @var \stdClass|mixed
   */
  public readonly $serviceLevel;

  /**
   * @var integer
   */
  public readonly $estimatedDays;

  /**
   * @var string
   */
  public readonly $durationTerms;

  /**
   * @var string
   */
  public readonly $carrierAccount;

  /**
   * @var string
   */
  public readonly $zone;

  /**
   * @var array
   */
  public readonly $messages;

  /**
   * @var bool
   */
  public readonly $test;

}
