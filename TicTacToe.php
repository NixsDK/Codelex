<?php
// Initialize the game board
$board = array(
    array("", "", ""),
    array("", "", ""),
    array("", "", "")
);

// Function to display the game board
function display_board($board) {
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            echo $board[$i][$j];
            if ($j < 2) {
                echo " | ";
            }
        }
        echo "\n";
        if ($i < 2) {
            echo "---------\n";
        }
    }
    echo "\n";
}

// Function to check if the game is over
function check_game_over($board) {
    // Check rows
    for ($i = 0; $i < 3; $i++) {
        if ($board[$i][0] != "" && $board[$i][0] == $board[$i][1] && $board[$i][0] == $board[$i][2]) {
            return $board[$i][0];
        }
    }

    // Check columns
    for ($j = 0; $j < 3; $j++) {
        if ($board[0][$j] != "" && $board[0][$j] == $board[1][$j] && $board[0][$j] == $board[2][$j]) {
            return $board[0][$j];
        }
    }

    // Check diagonals
    if ($board[0][0] != "" && $board[0][0] == $board[1][1] && $board[0][0] == $board[2][2]) {
        return $board[0][0];
    }
    if ($board[0][2] != "" && $board[0][2] == $board[1][1] && $board[0][2] == $board[2][0]) {
        return $board[0][2];
    }

    // Check for a tie
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            if ($board[$i][$j] == "") {
                return null;
            }
        }
    }
    return "tie";
}

// Initialize the first player to X
$current_player = "X";

// Main game loop
while (true) {
    // Display the game board
    display_board($board);

    // Get the user's move
    echo "Player $current_player's turn (column): ";
    $col = intval(trim(fgets(STDIN))) - 1;  // Subtract 1 to convert from 1-based to 0-based index

    // Check if the column number is valid
    if ($col < 0 || $col > 2) {
        echo "Invalid column number. Try again.\n";
        continue;
    }

    // Find the first available row in the chosen column
    $row = null;
    for ($i = 2; $i >= 0; $i--) {
        if ($board[$i][$col] == "") {
            $row = $i;
            break;
        }
    }

    // Update the game board if a valid move was made
    if ($row !== null) {
        $board[$row][$col] = $current_player;
        // Check if the game is over
        $winner = check_game_over($board);
        if ($winner !== null) {
            // Display the final game board and the winner
            display_board($board);
            if ($winner == "tie") {
                echo "It's a tie!\n";
            } else {
                echo "Player $winner wins!\n";
            }
            break;
        }
        // Switch players
        $current_player = $current_player == "X" ? "O" : "X";
    } else {
        echo "That column is already full. Try again.\n";
    }
}
