<?php

include __DIR__.'/Game.php';

$aGame = new Game();

$aGame->add("Chet");
$aGame->add("Pat");
$aGame->add("Sue");

function simulatePlayerAnswering()
{
  return rand(0, 9) != 7;
};

do {
  $rollOfTheDice = rand(0, 5) + 1;
  $aGame->roll($rollOfTheDice);

  $isAnswerCorrect = simulatePlayerAnswering();
  if ($isAnswerCorrect) {
    $theGameIsStillRunning = $aGame->wasCorrectlyAnswered();
  } else {
    $aGame->handleWrongAnswer();
    $theGameIsStillRunning = true;
  }
} while ($theGameIsStillRunning);
