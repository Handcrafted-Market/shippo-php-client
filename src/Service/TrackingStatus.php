<?php

namespace Handcrafted\Shippo\Service;

use Handcrafted\Shippo\Enum\Api\Carrier;

class TrackingStatus extends ServiceBase {

  /**
   * Gets a tracking status.
   *
   * @param Carrier $carrier - The carrier serving the tracking number.
   * @param string $tracking_number - The tracking number.
   *
   * @throws \GuzzleHttp\Exception\GuzzleException
   * @see https://goshippo.com/docs/reference/php#tracks-retrieve
   */
  public function get(Carrier $carrier, string $tracking_number):
  \Handcrafted\Shippo\Resource\TrackingStatus {
    $data = $this->request('get', "/tracks/$carrier->value/$tracking_number");
    return new \Handcrafted\Shippo\Resource\TrackingStatus($data);
  }

  /**
   * Register webhooks for a shipment.
   *
   * @see https://goshippo.com/docs/reference/php#tracks-create
   * @throws \GuzzleHttp\Exception\GuzzleException
   */
  public function registerWebhook(Carrier $carrier, string $tracking_number, ?string $metadata = NULL): \Handcrafted\Shippo\Resource\TrackingStatus {
    $params = [
      'carrier' => $carrier->value,
      'tracking_number' => $tracking_number,
    ];

    if ($metadata) {
      $params['metadata'] = $metadata;
    }

    $data = $this->request('post', "/tracks", $params);
    return new \Handcrafted\Shippo\Resource\TrackingStatus($data);
  }

}
