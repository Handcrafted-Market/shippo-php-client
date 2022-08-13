<?php

namespace Handcrafted\Shippo\Resource;

use Handcrafted\Shippo\Enum\Api\Carrier;
use Handcrafted\Shippo\Enum\WebhookEventType;
use Handcrafted\Shippo\Meta\WebhookData;

class Webhook {

  public readonly bool $test;

  public readonly Carrier $carrier;

  public readonly WebhookData $data;

  public readonly WebhookEventType $event;

  public function __construct(\stdClass $source) {
    $this->test = $source->test;
    $this->carrier = Carrier::from($source->carrier);
    $this->data = new WebhookData($source->data);
    $this->event = WebhookEventType::from($source->event);
  }

}
