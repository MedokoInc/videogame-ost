<?php

namespace HTLW3R\VideoGaming\Demo;

use HTLW3R\VideoGaming\Seeder\Seeder;

require_once 'Seeder.php';

$osts = Seeder::getData();
$availableOstKeys = array_keys($osts);

header('Content-Type: application/json; charset=utf-8');

if (isset($_GET['name'])) {
    $ostName = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['name']);

    if (in_array($ostName, $availableOstKeys)) {
        $ost = $osts[$ostName];

        if (isset($_GET['track'])) {
            $trackName = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['track']);
            $tracks = $ost->getTrackList();
            $availableTrackKeys = array_keys($tracks);

            if (in_array($trackName, $availableTrackKeys) && is_numeric($trackName)) {
                echo json_encode($tracks[$trackName]);
            } else {
                $errorOutput = array('error' => 'Track not found', 'code' => 404);
                echo json_encode($errorOutput);
            }
        } else {
            echo json_encode($ost);
        }
    } else {
        $errorOutput = array('error' => "OST not found", 'code' => 404);
        echo json_encode($errorOutput);
    }
} else {
    echo json_encode($osts);
}