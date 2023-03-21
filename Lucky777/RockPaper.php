<?php

// Define a function to get user input
function get_input($message) {
    echo $message . " ";
    return trim(fgets(STDIN));
}

// Define a function to generate a random choice for the computer
function get_computer_choice() {
    $choices = array('rock', 'paper', 'scissors');
    return $choices[array_rand($choices)];
}

// Define a function to determine the winner
function get_winner($user_choice, $computer_choice) {
    if ($user_choice == $computer_choice) {
        return "Tie!";
    } elseif ($user_choice == "rock" && $computer_choice == "scissors") {
        return "You win!";
    } elseif ($user_choice == "paper" && $computer_choice == "rock") {
        return "You win!";
    } elseif ($user_choice == "scissors" && $computer_choice == "paper") {
        return "You win!";
    } else {
        return "Computer wins!";
    }
}

// Play the game
echo "Let's play rock-paper-scissors!\n\n";
$user_choice = get_input("Choose rock, paper, or scissors:");
$computer_choice = get_computer_choice();
echo "You chose $user_choice.\n";
echo "The computer chose $computer_choice.\n";
echo get_winner($user_choice, $computer_choice) . "\n";

?>
