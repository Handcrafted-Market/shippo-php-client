<?php

namespace Handcrafted\Shippo\Enum;

enum BuildingLocationType: string {

  case FRONT_DOOR = "Front Door";

  case BACK_DOOR = "Back Door";

  case SIDE_DOOR = "Side Door";

  case KNOCK_ON_DOOR = "Knock on Door";

  case RING_BELL = "Ring Bell";

  case MAIL_ROOM = "Mail Room";

  case OFFICE = "Office";

  case RECEPTION = "Reception";

  case IN_AT_MAILBOK = "In/At Mailbox";

  case SECURITY_DECK = "Security Deck";

  case SHIPPING_DOCK = "Shipping Dock";

  case OTHER = "Other";

}