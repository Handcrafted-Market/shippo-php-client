<?php

namespace Handcrafted\Shippo\Enum;

enum RefundStatus: string {

  case QUEUED = "QUEUED";

  case PENDING = "PENDING";

  case SUCCESS = "SUCCESS";

  case ERROR = "ERROR";

}