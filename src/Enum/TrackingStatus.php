<?php

namespace Handcrafted\Shippo\Enum;

enum TrackingStatus: string {

  case UNKNOWN = "UNKNOWN";

  case PRE_TRANSIT = "PRE_TRANSIT";

  case TRANSIT = "TRANSIT";

  case DELIVERED = "DELIVERED";

  case RETURNED = "RETURNED";

  case FAILURE = "FAILURE";

}