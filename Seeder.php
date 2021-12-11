<?php

namespace HTLW3R\VideoGaming\Seeder;

use HTLW3R\VideoGaming\Song\Song;
use HTLW3R\VideoGaming\OST\OST;

require_once 'Seeder.php';
require_once 'OST.php';
require_once 'Song.php';

class Seeder
{
    public static function getData()
    {
        $minecraftTracks = array(
            new Song(1, 'Cat', 'Daniel Rosenfeld', 19, 186),
            new Song(2, 'Pigstep', 'Lena Raine', 4, 148),
            new Song(3, 'Ballad of the Cats', 'Daniel Rosenfeld', 15, 275),
            new Song(4, 'Death', 'Daniel Rosenfeld', 6, 41)
        );

        $stardewvalleyTracks = array(
            new Song(5, 'It\'s a big world outside', 'ConcernedApe', 5, 236),
            new Song(6, 'The Valley comes alive', 'ConcernedApe', 6, 263),
            new Song(7, 'Nature\'s Crescendo', 'ConcernedApe', 13, 208),
            new Song(8, 'Tropicala', 'ConcernedApe', 15, 202)
        );

        $mariokartTracks = array(
            new Song(10,'Mushroom Gorge','Nintendo',1,115),
            new Song(9,'Coconut Mall','Nintendo',2,131),
            new Song(11,'Maple Treeway','Nintendo',3,148),
            new Song(12,'Rainbow Road','Nintendo',4,83)
        );

        $minecraft = new OST(1, "Minecraft", "Minecraft", 2008, $minecraftTracks);
        $stardewvalley = new OST(2, 'Stardew Valley', 'Stardew Valley', 2017, $stardewvalleyTracks);
        $mariokart = new OST(3, 'Mario Kart Wii', 'Mario Kart Wii', 2006, $mariokartTracks);

        $list = array('minecraft'=>$minecraft,'stardevalley'=>$stardewvalley,'mariokart'=>$mariokart);

        return $list;
    }
}