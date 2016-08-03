<?php 
require __DIR__ . '/credentials.php';
require __DIR__ . '/../facturama/Api.php';

$facturma = new Api(USER, PASSWORD);

$clientId = 'TGpJ_Ko32_ZSEPBcZXRnRw2';

$result = $facturma->delete('Client/' . $clientId);
printf('<pre>%s<pre>', var_export($result, true));