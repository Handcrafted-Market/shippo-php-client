<?php

namespace Handcrafted\Shippo\Enum;

enum TaxIdType: string {

  case EIN = "EIN";

  case VAT = "VAT";

  case IOSS = "IOSS";

}