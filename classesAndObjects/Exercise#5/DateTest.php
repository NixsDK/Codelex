<?php


require_once("Date.php");

class DateTest
{
    function runTest()
    {
        // Creating an instance of the Date class
        $dateObj = new Date(4, 14, 2023);

        // Displaying the date using the displayDate method
        $dateObj->displayDate();

        // Updating the day of the date object
        $dateObj->setDay(15);

        // Displaying the updated date
        $dateObj->displayDate();
    }
}


