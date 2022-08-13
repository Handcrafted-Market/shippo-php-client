<?php

namespace Handcrafted\Shippo\Enum;

enum TrackingSubStatus: string {

  case INFORMATION_RECEIVED = 'information_received';

  case ADDRESS_ISSUE = 'address_issue';

  case CONTACT_CARRIER = 'contact_carrier';

  case DELAYED = 'delayed';

  case DELIVERY_ATTEMPTED = 'delivery_attempted';

  case DELIVERY_RESCHEDULED = 'delivery_rescheduled';

  case LOCATION_INACCESSIBLE = 'location_inaccessible';

  case NOTICE_LEFT = 'notice_left';

  case OUT_FOR_DELIVERY = 'out_for_delivery';

  case PACKAGE_ACCEPTED = 'packaged_accepted';

  case PACKAGE_ARRIVED = 'package_arrived';

  case PACKAGE_DAMAGED = 'package_damaged';

  case PACKAGE_DEPARTED = 'package_departed';

  case PACKAGE_PROCESSING = 'package_processing';

  case PICKUP_AVAILABLE = 'pickup_available';

  case RESCHEDULE_DELIVERY = 'reschedule_delivery';

  case DELIVERED = 'delivered';

  case RETURN_TO_SENDER = 'return_to_sender';

  case PACKAGE_UNCLAIMED = 'package_unclaimed';

  case PACKAGE_UNDELIVERABLE = 'package_undeliverable';

  case PACKAGE_DISPOSED = 'package_disposed';

  case PACKAGE_LOST = 'package_lost';

  case OTHER = 'other';

}
