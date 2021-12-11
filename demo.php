<?php

namespace HTLW3R\VideoGaming\Demo;

use HTLW3R\VideoGaming\Seeder\Seeder;

require_once 'Seeder.php';

$osts = Seeder::getData();
$availableOsts = array_keys($osts);
$ostName = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['name']);

header('Content-Type: application/json; charset=utf-8');

if (isset($ostName)) {
    if (in_array($ostName, $availableOsts)) {
        echo json_encode($osts[$_GET['name']]);
    } else {
        echo 'OST NOT FOUND';
    }
}else {
    echo json_encode($osts);
}