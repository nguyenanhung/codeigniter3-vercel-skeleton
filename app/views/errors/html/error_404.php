<?php

$array = [
    'code'      => 404,
    'message'   => '404 Not Found',
    'path'      => $_SERVER['REQUEST_URI'] ?? null,
    'ip'        => $_SERVER['HTTP_CF_CONNECTING_IP'] ?? null,
    'userAgent' => $_SERVER['HTTP_USER_AGENT'] ?? null
];
$json  = json_encode($array, JSON_PRETTY_PRINT);

echo $json;
exit();
