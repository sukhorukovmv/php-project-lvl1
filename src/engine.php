<?php

namespace BrainGames\Engine;

use function \BrainGames\Cli\viewCorrectAnswer;
use function \BrainGames\Cli\getName;
use function \BrainGames\Cli\getAnswer;
use function \BrainGames\Cli\viewWrongAnswer;
use function \BrainGames\Cli\viewCongratulations;
use function \BrainGames\Cli\viewGreeting;

function runGame($getCorrect, $viewRules)
{
    viewGreeting();
    $viewRules();
    $name = getName();
    $count = 3;
    do {
        $correctAnswer = $getCorrect();
        $answer = getAnswer();
        if ($correctAnswer === $answer) {
            $count--;
            viewCorrectAnswer();
        } else {
            viewWrongAnswer($name, $answer, $correctAnswer);
        }
    } while ($count > 0);
    viewCongratulations($name);
}
