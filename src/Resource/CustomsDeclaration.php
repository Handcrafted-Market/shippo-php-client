<?php

namespace Handcrafted\Shippo\Resource;

use Handcrafted\Shippo\Enum\B13aFilingOption;
use Handcrafted\Shippo\Enum\ContentsType;
use Handcrafted\Shippo\Enum\EelPfc;
use Handcrafted\Shippo\Enum\Incoterm;
use Handcrafted\Shippo\Enum\NonDeliveryOption;
use Handcrafted\Shippo\Enum\Validity;
use Handcrafted\Shippo\MapperTrait;
use Handcrafted\Shippo\Meta\ExporterIdentification;
use Handcrafted\Shippo\Meta\InvoicedCharges;

class CustomsDeclaration implements ResourceInterface {

  use MapperTrait;

  public readonly Validity $objectState;

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

  public readonly NonDeliveryOption $nonDeliveryOption;

  public readonly ContentsType $contentsType;

  public readonly string $contentsExplanation;

  public readonly string $exporterReference;

  public readonly string $importerReference;

  public readonly string $invoice;

  public readonly string $license;

  public readonly string $certificate;

  public readonly string $notes;

  public readonly EelPfc $eelPfc;

  public readonly string $aesItn;

  public readonly Incoterm $incoterm;

  public readonly B13aFilingOption $b13aFilingOption;

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

    $this->objectState = Validity::from($source->object_state);
    $this->nonDeliveryOption = NonDeliveryOption::from($source->non_delivery_option);
    $this->contentsType = ContentsType::from($source->contents_type);
    $this->eelPfc = EelPfc::from($source->eel_pfc);
    $this->incoterm = Incoterm::from($source->incoterm);
    $this->b13aFilingOption = B13aFilingOption::from($source->b13a_filing_option);
    $this->map($source);
  }

}