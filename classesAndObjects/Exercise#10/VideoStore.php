<?php

class VideoStore
{
    private $inventory;

    public function __construct()
    {
        $this->inventory = array();
    }

    public function addVideo($title)
    {
        $this->inventory[] = new Video($title);
    }

    public function checkOutVideo($title)
    {
        foreach ($this->inventory as $video) {
            if ($video->getTitle() == $title && !$video->isCheckedOut()) {
                $video->checkOut();
                return true;
            }
        }
        return false;
    }

    public function returnVideo($title)
    {
        foreach ($this->inventory as $video) {
            if ($video->getTitle() == $title && $video->isCheckedOut()) {
                $video->returnVideo();
                return true;
            }
        }
        return false;
    }

    public function rateVideo($title, $rating)
    {
        foreach ($this->inventory as $video) {
            if ($video->getTitle() == $title) {
                $video->receiveRating($rating);
                return true;
            }
        }
        return false;
    }

    public function listInventory()
    {
        foreach ($this->inventory as $video) {
            echo "Title: " . $video->getTitle() . "\n";
            echo "Average Rating: " . $video->getAverageRating() . "\n";
            echo "Checked Out: " . ($video->isCheckedOut() ? "Yes" : "No") . "\n\n";
        }
    }
}
