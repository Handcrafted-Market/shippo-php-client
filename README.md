# Shippo PHP Client
This package aims to provide a more usable way of interacting with the Shippo API than https://github.com/goshippo/shippo-php-client. The official php client is a bit of a pain to use since it's not really construcuted in a modern fashion, e.g. the namespaceing is poor, properties are accessed via magic methods, etc.

This is very much a work in progress and PRs are welcome.

## How to use the package
All interactions exist on the client object once it's initialized. For instance, you could do the following to create a new shipment.

```
$client = new \handcrafted\shippo\Client('your_api_token');

$shipment = $client->shipment()->create([
  'address_from' => $fromAddress,
  'address_to' => $toAddress,
  'parcels' => [$parcel],
  'async' => FALSE,
]);
```
