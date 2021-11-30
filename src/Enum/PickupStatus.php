<?php

namespace Handcrafted\Shippo\Enum;

enum PickupStatus: string {

  case PENDING = "PENDING";

  case CONFIRMED = "CONFIRMED";

  case ERROR = "ERROR";

  case CANCELLED = "CANCELLED";

}