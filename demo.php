<?php

namespace HTLW3R\VideoGaming\Demo;

use HTLW3R\VideoGaming\Seeder\Seeder;

require_once 'Seeder.php';

$osts = Seeder::getData();

header('Content-Type: application/json; charset=utf-8');

if (isset($_GET['name'])) {
    echo json_encode($osts[$_GET['name']]);
}else {
    echo json_encode($osts);
}