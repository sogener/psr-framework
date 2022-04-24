<?php

use Framework\Http\Request;

require_once 'vendor/autoload.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$request = (new Request())
    ->setQueryParams($_GET)
    ->setParsedBody($_POST);

$request2 = clone $request;
$request2->setQueryParams(['site' => 'eng']);

dd($request,$request2);
