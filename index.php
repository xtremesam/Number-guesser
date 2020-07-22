<?php
$play_count = 0;
$correct_guesses = 0;
$guess_high = 0;
$guess_low = 0;
echo "I'm going to think of numbers between 1 and 10 (inclusive). Do you think you can guess correctly?\n";

function guessNumber()
{
  global $guess_high, $guess_low, $correct_guesses, $play_count;
  
  $play_count++;

  $random_number = rand(1, 10);

  echo "\nMake your guess...\n";

$player_input = intval(readline(">> "));

echo "Round: $play_count\nMy Number: $random_number\nYour guess: $player_input";

if($player_input === $random_number){
  $correct_guesses++;
} else if($player_input > $random_number){
  $guess_high++;
} else if($player_input < $random_number){
  $guess_low++;
}
$percent_correct = $correct_guesses/$play_count * 100;
echo "\nAfter $play_count rounds, here are some facts about your guessing:\nYou guessed the number correctly $percent_correct% of the time.\n";

  if ($guess_high > $guess_low){
  echo "When you guessed wrong, you tended to guess high.\n"; 
} else if($guess_high < $guess_low){
  echo "When you guessed wrong, you tended to guess low.\n";
}
}

guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();