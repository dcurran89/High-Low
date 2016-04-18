<?php 

if(is_numeric($argv[1]) && is_numeric($argv[2])){
    $random = mt_rand($argv[1], $argv[2]);
    $numberGuess = 0;

    do {
        fwrite(STDOUT, "Guess a number {$argv[1]} - {$argv[2]}! \n");
        $guess = trim(fgets(STDIN));
        $numeric = is_numeric($guess);
        $numberGuess++;
        if($argv[1] <= $guess && $guess <= $argv[2] && $numeric){
            echo "\n";
            if($guess < $random){
                echo "You guessed {$guess}, the random number is HIGHER! \n";
            } elseif($guess > $random){
                echo "You guessed {$guess}, the random number is LOWER! \n";
            }
        } else {
            echo "You guessed {$guess}, that is not a number between {$argv[1]} and {$argv[2]}, guess again please! \n";
        }

    } while ($guess != $random);

    echo "GOOD GUESS, YOU GOT IT! \n";

    if($numberGuess >= 2){
        echo "It only took you {$numberGuess} guesses! \n";
    } else {
        echo "Wow you got it in {$numberGuess} guess! \n";
    }
} else {
        echo "Please enter two integer values \n";
    }