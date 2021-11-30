<?php

namespace Handcrafted\Shippo\Enum;

enum OrderStatus: string {

  case UNKNOWN = "UNKNOWN";

  case AWAITPAY = "AWAITPAY";

  case PAID = "PAID";

  case REFUNDED = "REFUNDED";

  case CANCELLED = "CANCELLED";

  case PARTIALLY_FULFILLED = "PARTIALLY_FULFILLED";

  case SHIPPED = "SHIPPED";

}