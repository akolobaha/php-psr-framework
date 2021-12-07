<?php
use Framework\Http\Request;

chdir(dirname(__DIR__));
require 'vendor/autoload.php';


### Initialization;

$request = (new Request())
    ->withQueryParams($_GET)
    ->withParsedBody($_POST);


$name = $request->getQueryParams()['name'] ?? 'Guest';

header('X-Developer: ElisDn');
echo 'Hello, ' . $name . '!';