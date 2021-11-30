<?php

namespace Handcrafted\Shippo\Enum\Api\ServiceLevel;

enum FedEx: string {

  case GROUND = "fedex_ground";

  case HOME_DELIVERY = "fedex_home_delivery";

  case SMART_POST = "fedex_smart_post";

  case FEDEX_2_DAY = "fedex_2_day";

  case FEDEX_2_DAY_AM = "fedex_2_day_am";

  case EXPRESS_SAVER = "fedex_express_saver";

  case STANDARD_OVERNIGHT = "fedex_standard_overnight";

  case PRIORITY_OVERNIGHT = "fedex_priority_overnight";

  case FIRST_OVERNIGHT = "fedex_first_overnight";

  case FREIGHT_PRIORITY = "fedex_freight_priority";

  case NEXT_DAY_FREIGHT = "fedex_next_day_freight";

  case FREIGHT_ECONOMY = "fedex_freight_economy";

  case FIRST_FREIGHT = "fedex_first_freight";

  case INTERNATIONAL_ECONOMY = "fedex_international_economy";

  case INTERNATIONAL_PRIORITY = "fedex_international_priority";

  case INTERNATIONAL_FIRST = "fedex_international_first";

  case EUROPE_FIRST_INTERNATIONAL_PRIORITY = "fedex_europe_first_international_priority";

  case INTERNATIONAL_ECONOMY_FREIGHT = "international_economy_freight";

  case INTERNATIONAL_PRIORITY_FREIGHT = "international_priority_freight";

}