<?php

/*
 * This file is part of Facturama PHP SDK.
 *
 * (c) Javier Telio <jtelio118@gmail.com>
 *
 * This source file is subject to a MIT license that is bundled
 * with this source code in the file LICENSE.
 */

require __DIR__.'/../vendor/autoload.php';

$facturama = new Facturama\Api(USER, PASSWORD);

$clientId = 'TGpJ_Ko32_ZSEPBcZXRnRw2';

/*$params = [
  'id' => $clientId
];*/

$body = [
  'Id' => $clientId,
  'Address' => [
    'Street' => 'St One',
    'ExteriorNumber' => '15',
    'InteriorNumber' => '12',
    'Neighborhood' => 'Lower Manhattan, ',
    'ZipCode' => 'sample string 5',
    'Locality' => 'sample string 6',
    'Municipality' => 'sample string 7',
    'State' => 'sample string 8',
    'Country' => 'MX',
  ],
  'Rfc' => 'XEXX010101000',
  'Name' => 'Test Test 2',
  'Email' => 'test@facturma.com',
];

//$result = $facturama->put('Client/' . $clientId, $body, $params);
$result = $facturama->put('Client/'.$clientId, $body);

printf('<pre>%s<pre>', var_export($result, true));
