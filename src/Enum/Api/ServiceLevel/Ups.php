<?php

namespace Handcrafted\Shippo\Enum\Api\ServiceLevel;

enum Ups: string {

  case STANDARD = "ups_standard";

  case GROUND = "ups_ground";

  case SAVER = "ups_saver";

  case UPS_3_DAY_SELECT = "ups_3_day_select";

  case SECOND_DAY_AIR = "ups_second_day_air";

  case SECOND_DAY_AIR_AM = "ups_second_day_air_am";

  case NEXT_DAY_AIR = "ups_next_day_air";

  case NEXT_DAY_AIR_SAVER = "ups_next_day_air_saver";

  case NEXT_DAY_AIR_EARLY_AM = "ups_next_day_air_early_am";

  case MAIL_INNOVATIONS_DOMESTIC = "ups_mail_innovations_domestic";

  case SUREPOST = "ups_surepost";

  case SUREPOST_BOUND_PRINTED_MATTER = "ups_surepost_bound_printed_matter";

  case SUREPOST_LIGHTWEIGHT = "ups_surepost_lightweight";

  case SUREPOST_MEDIA = "ups_surepost_media";

  case EXPRESS = "ups_express";

  case EXPRESS_1200 = "ups_express_1200";

  case EXPRESS_PLUS = "ups_express_plus";

  case EXPEDITED = "ups_expedited";

  case EXPRESS_EARLY = "ups_express_early";

  case ACCESS_POINT_ECONOMY = "ups_access_point_economy";

}