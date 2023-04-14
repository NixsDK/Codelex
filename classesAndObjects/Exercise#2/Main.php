<?php
require_once 'Point.php';

class Main
{
    public static function run()
    {
        $p1 = new Point(5, 2);
        $p2 = new Point(-3, 6);
        $p1->swapPoints($p1, $p2);
        echo "(" . $p1->x . ", " . $p1->y . ")";
        echo "(" . $p2->x . ", " . $p2->y . ")";
    }
}

Main::run();
