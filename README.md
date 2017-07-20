# Facturama SDK PHP
## How do I install it?
composer install javiertelioz/facturama-php-sdk:^1.0@dev
### Including the Lib
It includes the library to your project
```php
require __DIR__.'/vendor/autoload.php';
```
Start the development!
### Create an instance of Facturama\Api class
Example.
```php
$facturama = new \Facturama\Api('USER', 'PASSWORD');
```
With this instance you can start working.
At this stage your are ready to make call to the API on behalf of the user.
#### Making GET calls
```php
$params = [];
$result = $facturama->get('Client', $params);
```
#### Making POST calls
```php
$params = [
  "Address" => [
    "Street" => "St One ",
    "ExteriorNumber" => "15",
    "InteriorNumber" => "12",
    "Neighborhood" => "Lower Manhattan, ",
    "ZipCode" => "sample string 5",
    "Locality" => "sample string 6",
    "Municipality" => "sample string 7",
    "State" => "sample string 8",
    "Country" => "MX"
  ],
  "Rfc" => "XEXX010101000",
  "Name" => "Test Test",
  "Email" => "test@facturma.com"
];
$result = $facturama->post('Client', $params);
```
#### Making PUT calls
```php
$clientId = 'TGpJ_Ko32_ZSEPBcZXRnRw2';
$body = [
  "Id" => $clientId,
  "Address" => [
    "Street" => "St One",
    "ExteriorNumber" => "15",
    "InteriorNumber" => "12",
    "Neighborhood" => "Lower Manhattan, ",
    "ZipCode" => "sample string 5",
    "Locality" => "sample string 6",
    "Municipality" => "sample string 7",
    "State" => "sample string 8",
    "Country" => "MX"
  ],
  "Rfc" => "XEXX010101000",
  "Name" => "Test Test 2",
  "Email" => "test@facturma.com"
];

$result = $facturama->put('Client/' . $clientId, $body);
```
#### Making DELETE calls
```php
$clientId = 'TGpJ_Ko32_ZSEPBcZXRnRw2';

$result = $facturama->delete('Client/' . $clientId);
```
## Examples
Don't forget to check out our examples codes in the [examples](https://github.com/javiertelioz/facturama-php-sdk/tree/master/examples) directory

## I want to contribute!
That is great! Just fork the project in github. Create a topic branch, write some code, and add some tests for your new code.

Thanks for helping!

## Contributing:
[phansys](https://github.com/phansys/)
