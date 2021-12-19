<?php

namespace Handcrafted\Shippo\Resource;

use Handcrafted\Shippo\Enum\MassUnit;
use Handcrafted\Shippo\Enum\OrderStatus;
use Handcrafted\Shippo\Enum\ShopApp;
use Handcrafted\Shippo\MapperTrait;
use Handcrafted\Shippo\Meta\LineItem;

class Order {

  use MapperTrait;

  public readonly string $objectId;

  public readonly string $objectOwner;

  public readonly string $orderNumber;

  public readonly OrderStatus $orderStatus;

  public readonly string $placedAt;

  public readonly Address $toAddress;

  public readonly Address $fromAddress;

  /**
   * @var \Handcrafted\Shippo\Meta\LineItem[]
   */
  public readonly array $lineItems;

  public readonly string $shippingCost;

  public readonly string $shippingCostCurrency;

  public readonly ShopApp $shopApp;

  public readonly string $totalPrice;

  public readonly string $totalTax;

  public readonly string $currency;

  /**
   * @var \Handcrafted\Shippo\Resource\Transaction[]
   */
  public readonly array $transactions;

  public readonly string $weight;

  public readonly MassUnit $weightUnit;

  public readonly ?string $notes;

  public function __construct(\stdClass $source) {
    $this->lineItems = array_map(fn($li) => new LineItem($li), $source->line_items);
    $this->transactions = array_map(fn($t) => new Transaction($t), $source->transactions);
    $this->orderStatus = OrderStatus::from($source->order_status);
    $this->shopApp = ShopApp::from($source->shop_app);
    $this->weightUnit = MassUnit::from($source->weight_unit);
    $this->map($source);
  }

}