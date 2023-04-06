<?php

class Hangmanframe {
    public static function drawHangman($lives) {
        if ($lives == 7) {
            echo "|", PHP_EOL;
            echo "|", PHP_EOL;
            echo "|", PHP_EOL;
            echo "|", PHP_EOL;
            echo "|", PHP_EOL;
            echo "|", PHP_EOL;
            echo "##################", PHP_EOL;
        } elseif ($lives == 6) {
            echo "|----------", PHP_EOL;
            echo "|         |", PHP_EOL;
            echo "|", PHP_EOL;
            echo "|", PHP_EOL;
            echo "|", PHP_EOL;
            echo "|", PHP_EOL;
            echo "##################", PHP_EOL;
        } elseif ($lives == 5) {
            echo "|----------", PHP_EOL;
            echo "|         |", PHP_EOL;
            echo "|         O", PHP_EOL;
            echo "|         8", PHP_EOL;
            echo "|", PHP_EOL;
            echo "|", PHP_EOL;
            echo "##################", PHP_EOL;
        } elseif ($lives == 4) {
            echo "|----------", PHP_EOL;
            echo "|         |", PHP_EOL;
            echo "|         O", PHP_EOL;
            echo "|         8", PHP_EOL;
            echo "|", PHP_EOL;
            echo "|", PHP_EOL;
            echo "##################", PHP_EOL;
        } elseif ($lives == 3) {
            echo "|----------", PHP_EOL;
            echo "|         |", PHP_EOL;
            echo "|         O", PHP_EOL;
            echo "|       --8", PHP_EOL;
            echo "|", PHP_EOL;
            echo "|", PHP_EOL;
            echo "##################", PHP_EOL;
        } elseif ($lives == 2) {
            echo "|----------", PHP_EOL;
            echo "|         |", PHP_EOL;
            echo "|         O", PHP_EOL;
            echo "|       --8--", PHP_EOL;
            echo "|", PHP_EOL;
            echo "|", PHP_EOL;
            echo "##################", PHP_EOL;
        } elseif ($lives == 1) {
            echo "|----------", PHP_EOL;
            echo "|         |", PHP_EOL;
            echo "|         O", PHP_EOL;
            echo "|       --8--", PHP_EOL;
            echo "|        /", PHP_EOL;
            echo "|", PHP_EOL;
            echo "##################", PHP_EOL;
        } elseif ($lives == 0) {
            echo "|----------", PHP_EOL;
            echo "|         |", PHP_EOL;
            echo "|         O", PHP_EOL;
            echo "|       --8--", PHP_EOL;
            echo "|        /|", PHP_EOL;
            echo "|", PHP_EOL;
            echo "##################", PHP_EOL;
        }
    }
}
