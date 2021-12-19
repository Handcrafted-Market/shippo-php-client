<?php

namespace Handcrafted\Shippo\Resource;

use Handcrafted\Shippo\Enum\DistanceUnit;
use Handcrafted\Shippo\Enum\MassUnit;
use Handcrafted\Shippo\MapperTrait;

class Parcel implements ResourceInterface {

  use MapperTrait;

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
   * @var DistanceUnit
   */
  public readonly DistanceUnit $distanceUnit;

  /**
   * @var string
   */
  public readonly string $weight;

  /**
   * @var MassUnit
   */
  public readonly MassUnit $massUnit;

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

  public function __construct(\stdClass $source) {
    $this->distanceUnit = DistanceUnit::from($source->distance_unit);
    $this->massUnit = MassUnit::from($source->mass_unit);
    $this->map($source);
  }

}
