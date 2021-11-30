<?php

namespace Handcrafted\Shippo\Enum;

enum ShopApp: string {

  case AMAZON = "Amazon";

  case BIGCOMMERCE = "Bigcommerce";

  case CSV_IMPORT = "CSV_Import";

  case EBAY = "eBay";

  case EPAGES = "ePages";

  case Etsy = "Etsy";

  case GODADDY = "Godaddy";

  case MAGENTO = "Magento";

  case SHIPPO = "Shippo";

  case SHOPIFY = "Shopify";

  case SPREECOMMERCE = "Spreecommerce";

  case STRIPE_RELAY = "StripeRelay";

  case WEEBLY = "Weebly";

  case WOO_COMMERCE = "WooCommerce";

}