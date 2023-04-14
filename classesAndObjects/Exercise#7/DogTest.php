<?php
require_once('Dog.php');

class DogTest
{
    public static function main()
    {
        $max = new Dog("Max", "male");
        $rocky = new Dog("Rocky", "male");
        $sparky = new Dog("Sparky", "male");
        $buster = new Dog("Buster", "male");
        $sam = new Dog("Sam", "male");
        $lady = new Dog("Lady", "female");
        $molly = new Dog("Molly", "female");
        $coco = new Dog("Coco", "female");

        $max->setMother($lady);
        $max->setFather($rocky);
        $coco->setMother($molly);
        $coco->setFather($buster);
        $rocky->setMother($molly);
        $rocky->setFather($sam);
        $buster->setMother($lady);
        $buster->setFather($sparky);

        echo $coco->fathersName() . "\n";  // Output: "Buster"
        echo $sparky->fathersName() . "\n"; // Output: "Unknown"
        echo $coco->hasSameMotherAs($rocky) . "\n"; // Output: "1"
    }
}
