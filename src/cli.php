<?php
namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt;

function viewGreeting()
{
    line('Welcome to the Brain Games!');
}

function viewRuleBrainEven()
{
    line('Answer "yes" if the number is even, otherwise answer "no".');
}

function viewRuleBrainCalc()
{
    line('What is the result of the expression?');
}

function viewRuleBrainGcd()
{
    line('Find the greatest common divisor of given numbers.');
}

function viewRuleBrainProgression()
{
    line('What number is missing in the progression?');
}

function viewRules($str)
{
    line($str);
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
