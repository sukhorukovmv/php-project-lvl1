<?php

namespace BrainGames\Games;

use function \BrainGames\Engine\runGame;
use function \BrainGames\Cli\viewRules;
use function \BrainGames\Cli\viewRuleBrainEven;
use function \BrainGames\Cli\askQuestion;

function gcd($a, $b)
{
    while ($a != $b) {
        if ($a > $b) {
            $a = $a - $b;
        }
        else {
            $b = $b - $a;
        }
    }
    return $a;
}

function getCorrectAnswerBrainGcd()
{
    $rand1 = rand(1, 100);
    $rand2 = rand(1, 100);

    $correctAnswer = gcd($rand1, $rand2);

    $question = "${rand1} ${rand2}";

    askQuestion($question);

    return strval($correctAnswer);
}

function runBrainGcd()
{
    $getCorrect = '\BrainGames\Games\getCorrectAnswerBrainGcd';
    $viewRules = '\BrainGames\Cli\viewRuleBrainGcd';
    runGame($getCorrect, $viewRules);
}
