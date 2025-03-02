<?php

declare(strict_types=1);

header("Content-type: application/json; charset=UTF-8");

$parts = explode("/",$_SERVER['REQUEST_URI']);

if($parts[1] != "user"){
    http_response_code(404);
    exit;
}

$query = $parts[2] ?? null;

