<?php

namespace Handcrafted\Shippo\Resource;

use Handcrafted\Shippo\Enum\BatchStatus;
use Handcrafted\Shippo\Enum\LabelFileType;
use Handcrafted\Shippo\MapperTrait;
use Handcrafted\Shippo\Pager\BatchShipmentPager;

class Batch {

  use MapperTrait;

  public readonly BatchStatus $status;

  public readonly string $objectCreated;

  public readonly string $objectUpdated;

  public readonly string $objectId;

  public readonly string $objectOwner;

  public readonly string $defaultCarrierAccount;

  public readonly string $defaultServicelevelToken;

  public readonly LabelFileType $labelFiletype;

  public readonly string $metadata;

  public readonly BatchShipmentPager $batchShipments;

  public readonly string $labelUrl;

  public readonly string $objectResults;

  public function __construct(\stdClass $source) {
    $this->batchShipments = new BatchShipmentPager($source->batch_shipments);
    $this->status = BatchStatus::from($source->status);
    $this->labelFiletype = LabelFileType::from($source->label_filetype);
    $this->map($source);
  }


}