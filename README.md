# Shippo PHP Client

This package aims to provide a more usable way of interacting with the Shippo API
than https://github.com/goshippo/shippo-php-client. This is very much a work in progress and PRs are welcome.

## How to use the package

All interactions exist on the client object once it's initialized. For instance, you could do the following to create a
new shipment and then get its status. Note that properties on all returned objects are readonly properties and generally
cannot be reassigned.

```
$client = new \Handcrafted\Shippo\Client('your_api_token');

$shipment = $client->shipment->create([
  'address_from' => $fromAddress,
  'address_to' => $toAddress,
  'parcels' => [$parcel],
  'async' => FALSE,
]);

$status = $shipment->status;
```
