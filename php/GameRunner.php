<?php

include __DIR__.'/Game.php';

$aGame = new Game();

$aGame->add("Chet");
$aGame->add("Pat");
$aGame->add("Sue");

do {
  $rollOfTheDice = rand(0, 5) + 1;
  $aGame->roll($rollOfTheDice);

  if (rand(0, 9) == 7) {
      $notAWinner = $aGame->wrongAnswer();
  } else {
      $notAWinner = $aGame->wasCorrectlyAnswered();
  }
} while ($notAWinner);
