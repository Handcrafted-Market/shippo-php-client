<?php

namespace Handcrafted\Shippo\Enum;

enum BatchStatus: string {

  case VALIDATING = "VALIDATING";

  case VALID = "VALID";

  case INVALID = "INVALID";

  case PURCHASING = "PURCHASING";

  case PURCHASED = "PURCHASED";

}