<?php

namespace HTLW3R\VideoGaming\Demo;

use HTLW3R\VideoGaming\Seeder\Seeder;

require_once 'Seeder.php';

$ost = Seeder::minecraft();

echo (json_encode($ost));