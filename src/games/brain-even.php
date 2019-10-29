<?php

namespace BrainGames\Games;

use function BrainGames\Engine\runGame;
use function BrainGames\Cli\viewRules;
use function BrainGames\Cli\viewRuleBrainEven;
use function BrainGames\Cli\askQuestion;

function checkEven($num)
{
    $divisor = 2;
    if ($num % $divisor == 0) {
        return "yes";
    } else {
        return "no";
    }
}

function getCorrectAnswerBranEven()
{
    $randomNumber = rand(1, 100);
    askQuestion($randomNumber);
    return checkEven($randomNumber);
}

function runBrainEven()
{
    $getCorrect = '\BrainGames\Games\getCorrectAnswerBranEven';
    $viewRules = '\BrainGames\Cli\viewRuleBrainEven';
    runGame($getCorrect, $viewRules);
}
