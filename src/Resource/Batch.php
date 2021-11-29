<?php

namespace Handcrafted\Shippo\Resource;

use Handcrafted\Shippo\Pager\BatchShipmentPager;

class Batch extends ResourceBase {

  public readonly string $status;

  public readonly string $objectCreated;

  public readonly string $objectUpdated;

  public readonly string $objectId;

  public readonly string $objectOwner;

  public readonly string $defaultCarrierAccount;

  public readonly string $defaultServicelevelToken;

  public readonly string $labelFiletype;

  public readonly string $metadata;


  public readonly BatchShipmentPager $batchShipments;

  public readonly string $labelUrl;

  public readonly string $objectResults;

}