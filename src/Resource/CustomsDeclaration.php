<?php

namespace Handcrafted\Shippo\Resource;

use Handcrafted\Shippo\Meta\ExporterIdentification;
use Handcrafted\Shippo\Meta\InvoicedCharges;

class CustomsDeclaration extends ResourceBase {

  public readonly string $objectState;

  public readonly string $objectCreated;

  public readonly string $objectUpdated;

  public readonly string $objetId;

  public readonly string $objectOwner;

  public readonly string $certifySigner;

  public readonly bool $certify;

  /**
   * @var \Handcrafted\Shippo\Resource\CustomsItem[]
   */
  public readonly array $items;

  public readonly string $nonDeliveryOption;

  public readonly string $contentsType;

  public readonly string $contentsExplanation;

  public readonly string $exporterReference;

  public readonly string $importerReference;

  public readonly string $invoice;

  public readonly string $license;

  public readonly string $certificate;

  public readonly string $notes;

  public readonly string $eelPfc;

  public readonly string $aesItn;

  public readonly string $incoterm;

  public readonly string $b13aFilingOption;

  public readonly string $b13aNumber;

  /**
   * @var \Handcrafted\Shippo\Meta\InvoicedCharges[]
   */
  public readonly array $invoicedCharges;

  /**
   * @var \Handcrafted\Shippo\Meta\ExporterIdentification[]
   */
  public readonly array $exporterIdentification;

  public readonly ?string $metadata;

  public readonly string $disclaimer;

  public readonly string $test;

  public function __construct(\stdClass $source) {
    $this->items = array_map(fn($i) => new CustomsItem($i), $source->items);
    $this->invoicedCharges = array_map(fn($ic) => new InvoicedCharges($ic), $source->invoiced_charges);
    $this->exporterIdentification = array_map(fn($ei) => new ExporterIdentification($ei),
      $source->exporter_identification);
    parent::__construct($source);
  }

}