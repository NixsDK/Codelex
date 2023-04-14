<?php

class Video
{
    private $title;
    private $checkedOut;
    private $averageRating;
    private $totalRatings;
    private $numRatings;

    public function __construct($title)
    {
        $this->title = $title;
        $this->checkedOut = false;
        $this->averageRating = 0;
        $this->totalRatings = 0;
        $this->numRatings = 0;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function isCheckedOut()
    {
        return $this->checkedOut;
    }

    public function checkOut()
    {
        $this->checkedOut = true;
    }

    public function returnVideo()
    {
        $this->checkedOut = false;
    }

    public function getAverageRating()
    {
        return $this->averageRating;
    }

    public function receiveRating($rating)
    {
        $this->totalRatings += $rating;
        $this->numRatings++;
        $this->averageRating = $this->totalRatings / $this->numRatings;
    }
}
