<?php

namespace App\Games\Gcd;

use function App\Engine\run;

use const App\Engine\ROUNDS_COUNT;

function gcd(int $a, int $b): int
{
    while ($b !== 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

function generateRound(): array
{
    $num1 = random_int(1, 100);
    $num2 = random_int(1, 100);
    $question = "{$num1} {$num2}";
    $correctAnswer = (string) gcd($num1, $num2);
    return [$question, $correctAnswer];
}

function play(): void
{
    $description = 'Find the greatest common divisor of given numbers.';

    $rounds = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $rounds[] = generateRound();
    }

    run($description, $rounds);
}
