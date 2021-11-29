<?php

namespace Handcrafted\Shippo\Resource;

class Parcel extends ResourceBase {

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
   * @var mixed|null
   */
  public readonly $template;

  /**
   * @var string
   */
  public readonly $length;

  /**
   * @var string
   */
  public readonly $width;

  /**
   * @var string
   */
  public readonly $height;

  /**
   * @var string
   */
  public readonly $distanceUnit;

  /**
   * @var string
   */
  public readonly $weight;

  /**
   * @var string
   */
  public readonly $massUnit;

  /**
   * @var string
   */
  public readonly $metadata;

  /**
   * @var mixed
   */
  public readonly $extra;

  /**
   * @var array
   */
  public readonly $lineItems;

  /**
   * @var bool
   */
  public readonly $test;

}
