<?php

namespace Handcrafted\Shippo\Enum;

enum ShipmentStatus: string {

  case WAITING = "WAITING";

  case QUEUED = "QUEUED";

  case SUCCESS = "SUCCESS";

  case ERROR = "ERROR";

}