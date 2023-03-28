<?php

include 'Hangmanframe.php';

echo "Welcome to hangman, try your best to keep Benjamin alive :)\n";
$dictionary = fopen("C:/Users/NiksDK/Desktop/Skola/Programming/Java/Hangman2.0/HangMandict.txt", "r");

if ($dictionary) {
    $phraseList = array();
    while (($line = fgets($dictionary)) !== false) {
        $phraseList[] = trim($line);
    }
    fclose($dictionary);

    $hiddenText = $phraseList[rand(0, count($phraseList) - 1)];
    $phraseArray = str_split($hiddenText);

    $myAnswer = array_fill(0, count($phraseArray), '?');
    $wrongGuesses = array();
    $finished = false;
    $lives = 7;

    while (!$finished) {
        echo implode('', $myAnswer) . "\n";
        echo "Letters guessed incorrectly: " . implode(', ', $wrongGuesses) . "\n";

        $alphabet = trim(fgets(STDIN));

        // Check if symbol is in the word
        $found = false;
        if (in_array($alphabet, $wrongGuesses)) {
            echo "You have already guessed that letter. Please enter a different letter.\n";
        } else {
            for ($i = 0; $i < count($phraseArray); $i++) {
                if ($alphabet === $phraseArray[$i]) {
                    $found = true;
                    $myAnswer[$i] = $alphabet;
                }
            }
            if (!$found) {
                $lives--;
                array_push($wrongGuesses, $alphabet);
                echo "Wrong symbol\n";
            }
        }

        // Check if the game ends
        $finished = true;
        for ($i = 0; $i < count($myAnswer); $i++) {
            if ($myAnswer[$i] === '?') {
                echo "_ ";
                $finished = false;
            } else {
                echo $myAnswer[$i] . " ";
            }
        }
        echo "\nLives left: " . $lives . "\n";
        Hangmanframe::drawHangman($lives);
        if ($finished) {
            echo "Congratulations, you saved Benjamin from hanging\n";
        } else if ($lives <= 0) {
            echo "Benjamin died in a rough death\n";
            echo "The word was: " . $hiddenText . "\n";
            $finished = true;
        }
    }
} else {
    echo "Error opening dictionary file\n";
}