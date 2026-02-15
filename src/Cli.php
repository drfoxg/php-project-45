<?php

namespace App\Cli;

use function cli\line;
use function cli\prompt;

function welcome(): string
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    return $name;
}

function runBrainEven()
{
    $name = welcome();
    line('Answer "yes" if the number is even, otherwise answer "no".');

    $rounds = 3;

    for ($i = 0; $i < $rounds; $i++) {
        $number = rand(1, 100);
        $correctAnswer = $number % 2 === 0 ? 'yes' : 'no';

        $answer = prompt("Question: {$number}\nYour answer");

        if ($answer !== $correctAnswer) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
            line("Let's try again, %s!", $name);
            return;
        }

        line('Correct!');
    }

    line('Congratulations, %s!', $name);
}
