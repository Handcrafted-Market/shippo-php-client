<?php

namespace Handcrafted\Shippo\Enum;

enum WebhookEventType: string {

  case TRANSACTION_CREATED = 'transaction_created';

  case TRANSACTION_UPDATED = 'transaction_updated';

  case TRACK_UPDATED = 'track_updated';

  case BATCH_CREATED = 'batch_created';

  case BATCH_PURCHASED = 'batch_purchased';

}
