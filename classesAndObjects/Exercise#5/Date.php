<?php


class Date
{
    private $month;
    private $day;
    private $year;

    function __construct($month, $day, $year)
    {
        $this->month = $month;
        $this->day = $day;
        $this->year = $year;
    }

    function setMonth($month)
    {
        $this->month = $month;
    }

    function getMonth()
    {
        return $this->month;
    }

    function setDay($day)
    {
        $this->day = $day;
    }

    function getDay()
    {
        return $this->day;
    }

    function setYear($year)
    {
        $this->year = $year;
    }

    function getYear()
    {
        return $this->year;
    }

    function displayDate()
    {
        echo "{$this->month}/{$this->day}/{$this->year}\n";
    }
}


