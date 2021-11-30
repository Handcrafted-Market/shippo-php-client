<?php

namespace Handcrafted\Shippo\Enum\Api\ServiceLevel;

enum Usps: string {

  case PRIORITY = "usps_priority";

  case PRIORITY_EXPRESS = "usps_priority_express";

  case FIRST = "usps_first";

  case PARCEL_SELECT = "usps_parcel_select";

  case MEDIA_MAIL = "usps_media_mail";

  case PRIORITY_MAIL_INTERNATIONAL = "usps_priority_mail_international";

  case PRIORITY_MAIL_EXPRESS_INTERNATIONAL = "usps_priority_mail_express_international";

  case FIRST_CLASS_PACKAGE_INTERNATIONAL_SERVICE = "usps_first_class_package_international_service";

}