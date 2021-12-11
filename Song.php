<?php

namespace HTLW3R\VideoGaming\Song;

require_once 'Song.php';

class Song implements \JsonSerializable
{
    private $id;
    private $name;
    private $artist;
    private $trackNumber;
    private $duration;

    /**
     * @param $id
     * @param $name
     * @param $artist
     * @param $trackNumber
     * @param $duration
     */
    public function __construct(int $id,string $name,string $artist,int $trackNumber,int $duration)
    {
        $this->id = $id;
        $this->name = $name;
        $this->artist = $artist;
        $this->trackNumber = $trackNumber;
        $this->duration = $duration;
    }


    public function jsonSerialize()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'artist' => $this->artist,
            'trackNumber' => $this->trackNumber,
            'duration' => $this->duration
        ];
    }
}