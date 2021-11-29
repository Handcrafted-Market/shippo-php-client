<?php

namespace Handcrafted\Shippo\Resource;

class Order extends ResourceBase {

  public readonly string $objectId;

  public readonly string $objectOwner;

  public readonly string $orderNumber;

  public readonly string $oderStatus;

  public readonly string $placedAt;

  public readonly Address $toAddress;

  public readonly Address $fromAddress;

  /**
   * @var \Handcrafted\Shippo\Resource\LineItem[]
   */
  public readonly array $lineItems;

  public readonly string $shippingCost;

  public readonly string $shippingCostCurrency;

  public readonly string $shopApp;

  public readonly string $totalPrice;

  public readonly string $totalTax;

  public readonly string $currency;

  /**
   * @var \Handcrafted\Shippo\Resource\Transaction[]
   */
  public readonly array $transactions;

  public readonly string $weight;

  public readonly string $weightUnit;

  public readonly ?string $notes;

}