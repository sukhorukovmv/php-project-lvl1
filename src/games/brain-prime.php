<?php

namespace BrainGames\Games;

use function BrainGames\Engine\runGame;
use function BrainGames\Cli\viewRules;
use function BrainGames\Cli\viewRuleBrainEven;
use function BrainGames\Cli\askQuestion;

function isPrime($n)
{
   $d = 2;
   while($n % $d != 0) {
       $d += 1;
   }
   return $d == $n ? "yes" : "no";
}

function getCorrectAnswerBrainPrime()
{
    $rand1 = rand(1, 100);

    $correctAnswer = isPrime($rand1);

    $question = "${rand1}";

    askQuestion($question);

    return strval($correctAnswer);
}

function runBrainPrime()
{
    $getCorrect = '\BrainGames\Games\getCorrectAnswerBrainPrime';
    $viewRules = '\BrainGames\Cli\viewRuleBrainPrime';
    runGame($getCorrect, $viewRules);
}
