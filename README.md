#Facturama SDK PHP
## How do I install it?
git clone https://github.com/javiertelioz/facturama-php-sdk.git
### Including the Lib
It includes the library to your project
```php
require '/facturama/Api.php';
```
Start the development!
### Create an instance of Facturama\Api class
Example.
```php
$facturma = new Api('USER', 'PASSWORD');
```
With this instance you can start working.
At this stage your are ready to make call to the API on behalf of the user.
#### Making GET calls
```php
$params = [];
$result = $facturma->get('Client', $params);
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
$result = $facturma->post('Client', $params);
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

$result = $facturma->put('Client/' . $clientId, $body);
```
#### Making DELETE calls
```php
$clientId = 'TGpJ_Ko32_ZSEPBcZXRnRw2';

$result = $facturma->delete('Client/' . $clientId);
```
## Examples
Don't forget to check out our examples codes in the folder [examples](https://github.com/javiertelioz/facturama-php-sdk/tree/master/examples)

## I want to contribute!
That is great! Just fork the project in github. Create a topic branch, write some code, and add some tests for your new code.

Thanks for helping!