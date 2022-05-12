<?php

use Framework\Http\RequestFactory;
use Framework\Http\Response;

require_once '../vendor/autoload.php';

### Initialization
$request = RequestFactory::fromGlobals();

### Action
$name = $request->getQueryParams()['name'] ?? 'Anonymous';

$response = (new Response($name))
    ->withHeader('Developer', 'Sogener');

### Sending
header('HTTP/1.0' . $response->getStatusCode() . ' ' . $response->getReasonPhrase());

foreach ($response->getHeaders() as $name => $value) {
    header($name . ':' . $value);
}

echo $response->getBody();