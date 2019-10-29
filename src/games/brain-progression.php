<?php

namespace BrainGames\Games;

use function BrainGames\Engine\runGame;
use function BrainGames\Cli\viewRules;
use function BrainGames\Cli\viewRuleBrainEven;
use function BrainGames\Cli\askQuestion;

function getCorrectAnswerBrainProgression()
{
    $startProgression = rand(1, 100);
    $baseProgression = rand(1, 10);
    $lenghtProgression = 10;
    $progression[0] = $startProgression;

    for ($i = 1; $i < $lenghtProgression; $i++) {
        $progression[$i] = $progression[$i - 1] + $baseProgression;
    }

    $randomElement = rand(0, $baseProgression - 1);
    $correctAnswer = $progression[$randomElement];
    $question = "";

    for ($i = 0; $i < $lenghtProgression; $i++) {
        if ($i === $randomElement) {
            $question .= ".. ";
        } else {
            $question .= $progression[$i] . " ";
        }
    }
    
    askQuestion($question);

    return strval($correctAnswer);
}

function runBrainProgression()
{
    $getCorrect = '\BrainGames\Games\getCorrectAnswerBrainProgression';
    $viewRules = '\BrainGames\Cli\viewRuleBrainProgression';
    runGame($getCorrect, $viewRules);
}
