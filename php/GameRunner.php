<?php

include __DIR__.'/Game.php';

$aGame = new Game();

$aGame->add("Chet");
$aGame->add("Pat");
$aGame->add("Sue");

abstract class PlayerAnswerStatus
{
  const Correct = true;
  const Incorrect = false;
}

function simulatePlayerAnswer()
{
  if (rand(0, 9) != 7) {
    return PlayerAnswerStatus::Correct;
  }
  return PlayerAnswerStatus::Incorrect;
};

do {
  $rollOfTheDice = rand(0, 5) + 1;
  $aGame->roll($rollOfTheDice);

  if (simulatePlayerAnswer() === PlayerAnswerStatus::Correct) {
    $theGameIsStillRunning = $aGame->wasCorrectlyAnswered();
  } else {
    $aGame->handleWrongAnswer();
    $theGameIsStillRunning = true;
  }
} while ($theGameIsStillRunning);
