<?php 

$random = mt_rand(0, 100);
$numberGuess = 0;

do{
    fwrite(STDOUT, "Guess a number 0 - 100! \n");
    $guess = trim(fgets(STDIN));
    $numeric = is_numeric($guess);
    $numberGuess++;
    if($guess >= 0 && $guess <= 100 && $numeric){
        echo "\n";

        if($guess < $random){
            echo "You guessed {$guess}, the random number is HIGHER! \n";
        } elseif($guess > $random){
            echo "You guessed {$guess}, the random number is LOWER! \n";
        }
    } else {
        echo "You guessed {$guess}, that is not a number between 0 and 100, guess again please! \n";
    }

} while ($guess != $random);

echo "GOOD GUESS, YOU GOT IT! \n";

if($numberGuess >= 2){
        echo "It only took you {$numberGuess} guesses! \n";
} else {
    echo "Wow you got it in {$numberGuess} guess! \n";
}