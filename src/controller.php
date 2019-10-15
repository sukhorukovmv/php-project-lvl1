<?php

namespace BrainGames\Controller;

use function \BrainGames\Cli\viewRuleBrainEven;
use function \BrainGames\Cli\viewCorrectAnswer;
use function \BrainGames\Cli\getName;
use function \BrainGames\Cli\getAnswer;
use function \BrainGames\Cli\askQuestion;
use function \BrainGames\Cli\viewWrongAnswer;
use function \BrainGames\Cli\viewCongratulations;

function checkEven($num)
{
    $divisor = 2;
    if ($num % $divisor == 0) {
        return "yes";
    } else {
        return "no";
    }
}

function runBrainEven()
{
    viewRuleBrainEven();
    $name = getName();

    $count = 3;
    do {
        $randomNumber = rand(1, 100);

        askQuestion($randomNumber);

        $answer = getAnswer();
        $correctAnswer = checkEven($randomNumber);

        if ($answer === "yes" || $answer === "no") {
            if ($correctAnswer === $answer) {
                $count--;
                viewCorrectAnswer();
            } else {
                viewWrongAnswer($name, $answer, $correctAnswer);
            }
        } else {
            viewWrongAnswer($name, $answer, $correctAnswer);
        }
    } while ($count > 0);
    viewCongratulations($name);
}
