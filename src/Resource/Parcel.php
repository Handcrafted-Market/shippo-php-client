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
  public readonly string $objectState;

  /**
   * @var string|null
   */
  public readonly string $template;

  /**
   * @var string
   */
  public readonly string $length;

  /**
   * @var string
   */
  public readonly string $width;

  /**
   * @var string
   */
  public readonly string $height;

  /**
   * @var string
   */
  public readonly string $distanceUnit;

  /**
   * @var string
   */
  public readonly string $weight;

  /**
   * @var string
   */
  public readonly string $massUnit;

  /**
   * @var string
   */
  public readonly string $metadata;

  /**
   * @var object - Should be converted to Extra when created.
   */
  public readonly object $extra;

  /**
   * @var bool
   */
  public readonly bool $test;

}
