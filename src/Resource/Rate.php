<?php

namespace Handcrafted\Shippo\Resource;

class Rate extends ObjectResourceBase {

  /**
   * @var string
   */
  protected $shipment;

  /**
   * @var array
   */
  protected $attributes;

  /**
   * @var string
   */
  protected $amountLocal;

  /**
   * @var string
   */
  protected $currencyLocal;

  /**
   * @var string
   */
  protected $amount;

  /**
   * @var string
   */
  protected $currency;

  /**
   * @var string
   */
  protected $provider;

  /**
   * @var string
   */
  protected $providerImage75;

  /**
   * @var string
   */
  protected $providerImage200;

  /**
   * @var \stdClass|mixed
   */
  protected $serviceLevel;

  /**
   * @var integer
   */
  protected $estimatedDays;

  /**
   * @var string
   */
  protected $durationTerms;

  /**
   * @var string
   */
  protected $carrierAccount;

  /**
   * @var string
   */
  protected $zone;

  /**
   * @var array
   */
  protected $messages;

  /**
   * @var bool
   */
  protected $test;

}
