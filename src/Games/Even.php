<?php

namespace App\Games\Even;

use function App\Engine\run;

const MIN_NUMBER = 1;
const MAX_NUMBER = 100;
const DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function play(): void
{
    run(DESCRIPTION, __NAMESPACE__ . '\\generateRound');
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
