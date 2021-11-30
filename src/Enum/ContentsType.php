<?php

namespace Handcrafted\Shippo\Enum;

enum ContentsType: string {

  case DOCUMENTS = "DOCUMENTS";

  case GIFT = "GIFT";

  case SAMPLE = "SAMPLE";

  case MERCHANDISE = "MERCHANDISE";

  case HUMANITARIAN_DONATION = "HUMANITARIAN_DONATION";

  case RETURN_MERCHANDISE = "RETURN_MERCHANDISE";

  case OTHER = "OTHER";

}