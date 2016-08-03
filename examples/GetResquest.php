<?php 
require __DIR__ . '/credentials.php';
require __DIR__ . '/../facturama/Api.php';

$facturma = new Api(USER, PASSWORD);

$params = [];
$result = $facturma->get('Client', $params);
printf('<pre>%s<pre>', var_export($result, true));