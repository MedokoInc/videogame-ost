<?php

namespace HTLW3R\VideoGaming\OST;

use Exception;
use HTLW3R\VideoGaming\Song\Song;

require_once 'OST.php';
require_once 'Song.php';

class OST implements \JsonSerializable
{
    private $id;
    private $name;
    private $gameName;
    private $releaseYear;
    private $trackList;

    /**
     * @param $id
     * @param $name
     * @param $gameName
     * @param $releaseYear
     * @param Song[] $trackList
     */
    public function __construct(int $id, string $name, string $gameName, int $releaseYear, array $trackList)
    {
        $this->id = $id;
        $this->name = $name;
        $this->gameName = $gameName;
        $this->releaseYear = $releaseYear;
        $this->trackList = $trackList;
    }

    /**
     * @return Song[]
     */
    public function getTrackList()
    {
        return $this->trackList;
    }

    public function jsonSerialize()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'gameName' => $this->gameName,
            'releaseYear' => $this->releaseYear,
            'trackList' => $this->trackList
        ];
    }

    public function jsonUnserialize($data)
    {
        list(
            $this->id,
            $this->name,
            $this->gameName,
            $this->releaseYear,
            $this->trackList,
            ) = unserialize($data);
    }
}