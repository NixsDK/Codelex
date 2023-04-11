<?php
class Video {
private $title;
private $checkedOut;
private $averageRating;
private $totalRating;
private $numRatings;

public function __construct($title) {
$this->title = $title;
$this->checkedOut = false;
$this->averageRating = 0.0;
$this->totalRating = 0.0;
$this->numRatings = 0;
}

public function getTitle() {
return $this->title;
}

public function isCheckedOut() {
return $this->checkedOut;
}

public function getAverageRating() {
return $this->averageRating;
}

public function addRating($rating) {
$this->totalRating += $rating;
$this->numRatings += 1;
$this->averageRating = $this->totalRating / $this->numRatings;
}

public function checkOut() {
$this->checkedOut = true;
}

public function returnVideo() {
$this->checkedOut = false;
}

public function __toString() {
$checkedOutStr = $this->isCheckedOut() ? "Checked out" : "On the shelves";
return "{$this->title}, {$this->averageRating}, {$checkedOutStr}\n";
}
}

class VideoStore {
private $videos;

public function __construct() {
$this->videos = array();
}

public function addVideo($title) {
$video = new Video($title);
$this->videos[] = $video;
}

public function checkOutVideo($title) {
foreach ($this->videos as $video) {
if ($video->getTitle() == $title) {
$video->checkOut();
return true;
}
}
return false;
}

public function returnVideo($title) {
foreach ($this->videos as $video) {
if ($video->getTitle() == $title) {
$video->returnVideo();
return true;
}
}
return false;
}

public function takeRating($title, $rating) {
foreach ($this->videos as $video) {
if ($video->getTitle() == $title) {
$video->addRating($rating);
return true;
}
}
return false;
}

public function listInventory() {
foreach ($this->videos as $video) {
echo $video;
}
}
}

// Test the functionality of the Video and VideoStore classes
$store = new VideoStore();
$store->addVideo("The Matrix");
$store->addVideo("Godfather II");
$store->addVideo("Star Wars Episode IV: A New Hope");

$store->takeRating("The Matrix", 5);
$store->takeRating("The Matrix", 4);
$store->takeRating("The Matrix", 5);
$store->takeRating("Godfather II", 5);
$store->takeRating("Godfather II", 5);
$store->takeRating("Star Wars Episode IV: A New Hope", 4);
$store->takeRating("Star Wars Episode IV: A New Hope", 5);

$store->checkOutVideo("Godfather II");

$store->listInventory();
