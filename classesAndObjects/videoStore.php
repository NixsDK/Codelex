<?php
class Application
{
function run()
{
while (true) {
echo "Choose the operation you want to perform:\n";
echo "Choose 0 for EXIT\n";
echo "Choose 1 to fill video store\n";
echo "Choose 2 to rent video (as user)\n";
echo "Choose 3 to return video (as user)\n";
echo "Choose 4 to list inventory\n";

$command = (int)readline();

switch ($command) {
case 0:
echo "Bye!\n";
die;
case 1:
$this->add_movies();
break;
case 2:
$this->rent_video();
break;
case 3:
$this->return_video();
break;
case 4:
$this->list_inventory();
break;
default:
echo "Sorry, I don't understand you.\n";
}
}
}

private function add_movies()
{
$movies = array(
"Rocky IV" => "Drama",
"Deadpool" => "Action",
"Transformers" => "Science Fiction",
"Wednesday" => "Comedy",
"Pacific Rim" => "Science Fiction",
"Anabella" => "Horror"
);

foreach ($movies as $name => $genre) {
// Create a new Video object and add it to the VideoStore's inventory
$video = new Video($name, $genre);
VideoStore::add_video($video);
}

echo "Movies added successfully!\n";
}

private function rent_video()
{
//todo
}

private function return_video()
{
//todo
}

private function list_inventory()
{
//todo
}
}
$app = new Application();
$app->run();
