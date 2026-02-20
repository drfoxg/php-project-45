<?php

namespace App\Games\Gcd;

use function App\Engine\run;

use const App\Engine\ROUNDS_COUNT;

const MIN_NUMBER = 1;
const MAX_NUMBER = 100;

function play(): void
{
    $description = 'Find the greatest common divisor of given numbers.';

    $rounds = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $rounds[] = generateRound();
    }

    run($description, $rounds);
}

function generateRound(): array
{
    $num1 = random_int(MIN_NUMBER, MAX_NUMBER);
    $num2 = random_int(MIN_NUMBER, MAX_NUMBER);
    $question = "{$num1} {$num2}";
    $correctAnswer = (string) getGcd($num1, $num2);
    return [$question, $correctAnswer];
}

function getGcd(int $a, int $b): int
{
    while ($b !== 0) {
        [$a, $b] = [$b, $a % $b];
    }

    return $a;
}
