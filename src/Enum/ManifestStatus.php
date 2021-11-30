<?php

namespace Handcrafted\Shippo\Enum;

enum ManifestStatus: string {

  case QUEUED = "QUEUED";

  case SUCCESS = "SUCCESS";

  case ERROR = "ERROR";

}