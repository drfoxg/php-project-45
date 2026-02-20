<?php

namespace App\Games\Even;

use function App\Engine\run;

use const App\Engine\ROUNDS_COUNT;

const MIN_NUMBER = 1;
const MAX_NUMBER = 100;

function play(): void
{
    $description = 'Answer "yes" if the number is even, otherwise answer "no".';

    $rounds = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $rounds[] = generateRound();
    }

    run($description, $rounds);
}

function generateRound(): array
{
    $number = random_int(MIN_NUMBER, MAX_NUMBER);
    $correctAnswer = isEven($number) ? 'yes' : 'no';
    return [$number, $correctAnswer];
}

function isEven(int $number): bool
{
    return $number % 2 === 0;
}
