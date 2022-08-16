<?php

namespace Handcrafted\Shippo\Enum\Api;

/**
 * Tokens used to reference carriers, e.g. when tracking shipments.
 *
 *
 * @see https://goshippo.com/docs/reference/php#carriers
 */
enum Carrier: string {

  case DHL_EXPRESS = "dhl_express";

  case FEDEX = "fedex";

  case UPS = "ups";

  case USPS = "usps";

  // Used in test webhooks
  case SHIPPO = 'shippo';

}