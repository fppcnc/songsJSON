<?php

class Song implements JsonSerializable
{
private int $id;
private string $title;
private string $singer;

    /**
     * @param int $id
     * @param string $title
     * @param string $singer
     */
    public function __construct($id, $title, $singer)
    {
        $this->id = $id;
        $this->title = $title;
        $this->singer = $singer;
    }
public function jsonSerialize()
{
    return ['id' => $this->id, 'title' => $this->title, 'singer' => $this->singer];
}

}