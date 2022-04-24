<?php

use Framework\Http\RequestFactory;

require_once 'vendor/autoload.php';

$request1 = RequestFactory::createRequest(['request1' => 'req-value1', 'body1' => 'body-value1']);
$request2 = RequestFactory::createRequest(['request2' => 'req-value2', 'body2' => 'body-value2']);

dd($request1, $request2);
