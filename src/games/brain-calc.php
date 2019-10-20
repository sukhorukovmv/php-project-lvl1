<?php

namespace BrainGames\Games;

use function \BrainGames\Engine\runGame;
use function \BrainGames\Cli\viewRules;
use function \BrainGames\Cli\viewRuleBrainEven;
use function \BrainGames\Cli\askQuestion;

function getCorrectAnswerBrainCalc()
{
    $rand1 = rand(1, 100);
    $rand2 = rand(1, 100);
    $operators = array('*', '/', '+', '-');
    $randoperator = $operators[rand(0, 3)];

    $question = "${rand1} ${randoperator} ${rand2}";

    askQuestion($question);

    switch ($randoperator) {
        case "+":
            $correctAnswer = $rand1 + $rand2;
            break;
        case "-":
            $correctAnswer = $rand1 - $rand2;
            break;
        case "*":
            $correctAnswer = $rand1 * $rand2;
            break;
        case "/":
            $correctAnswer = $rand1 / $rand2;
            break;
    }

    return strval($correctAnswer);
}

function runBrainCalc()
{
    $getCorrect = '\BrainGames\Games\getCorrectAnswerBrainCalc';
    $viewRules = '\BrainGames\Cli\viewRuleBrainCalc';
    runGame($getCorrect, $viewRules);
}
