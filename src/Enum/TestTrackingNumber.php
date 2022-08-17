<?php

namespace Enum;

enum TestTrackingNumber {

  case SHIPPO_PRE_TRANSIT;

  case SHIPPO_TRANSIT;

  case SHIPPO_DELIVERED;

  case SHIPPO_RETURNED;

  case SHIPPO_FAILURE;

  case SHIPPO_UNKNOWN;

}
