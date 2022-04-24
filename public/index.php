<?php

use Framework\Http\Request;

require_once 'vendor/autoload.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$request = (new Request())
    ->setQueryParams($_GET)
    ->setParsedBody($_POST);

$request2 = $request
    ->setQueryParams(['hello' => 123])
    ->setParsedBody(['body' => 222]);

dd($request, $request2);
