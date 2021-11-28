<?php

namespace Handcrafted\Shippo\Resource;

class Parcel extends ResourceBase {

  /**
   * @var string
   */
  protected $objectState;

  /**
   * @var string
   */
  protected $objectCreated;

  /**
   * @var string
   */
  protected $objectUpdated;

  /**
   * @var string
   */
  protected $objectId;

  /**
   * @var string
   */
  protected $objectOwner;

  /**
   * @var mixed|null
   */
  protected $template;

  /**
   * @var string
   */
  protected $length;

  /**
   * @var string
   */
  protected $width;

  /**
   * @var string
   */
  protected $height;

  /**
   * @var string
   */
  protected $distanceUnit;

  /**
   * @var string
   */
  protected $weight;

  /**
   * @var string
   */
  protected $massUnit;

  /**
   * @var string
   */
  protected $metadata;

  /**
   * @var mixed
   */
  protected $extra;

  /**
   * @var array
   */
  protected $lineItems;

  /**
   * @var bool
   */
  protected $test;

}
