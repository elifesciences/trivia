<?php

include __DIR__.'/Game.php';

$aGame = new Game();

$aGame->add("Chet");
$aGame->add("Pat");
$aGame->add("Sue");

do {
  $rollOfTheDice = rand(0, 5) + 1;
  $aGame->roll($rollOfTheDice);

  $isAnswerCorrect = rand(0, 9) != 7;
  if ($isAnswerCorrect) {
    $theGameIsStillRunning = $aGame->wasCorrectlyAnswered();
  } else {
    $theGameIsStillRunning = $aGame->wrongAnswer();
  }
} while ($theGameIsStillRunning);
