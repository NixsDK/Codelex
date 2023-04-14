<?php


require_once("Date.php");
require_once("DateTest.php");

class Main
{
    function run()
    {
        // Creating an instance of the DateTest class and running the test
        $test = new DateTest();
        $test->runTest();
    }
}

// Creating an instance of the Main class and running its run() method
$main = new Main();
$main->run();

