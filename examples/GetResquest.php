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

$params = [];
$result = $facturama->get('Client', $params);
printf('<pre>%s<pre>', var_export($result, true));
