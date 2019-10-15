<?php
namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt;
use function \BrainGames\Controller\runBrainEven;

function run()
{
    viewGreeting();
    runBrainEven();
}

function viewGreeting()
{
    line('Welcome to the Brain Games!');
}

function viewRuleBrainEven()
{
    line('Answer "yes" if the number is even, otherwise answer "no".');
}

function getName()
{
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}

function getAnswer()
{
    return prompt('Your answer');
}

function askQuestion($randomNumber)
{
    line("Question: %s", $randomNumber);
}

function viewCongratulations($name)
{
    line("Congratulations, %s!", $name);
}

function viewCorrectAnswer()
{
    line("Correct!");
}

function viewWrongAnswer($name, $answer, $correctAnswer)
{
    line("'$answer' is wrong answer ;(. Correct answer was '$correctAnswer'.");
    line("Let's try again, %s!)", $name);
}
