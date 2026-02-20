<?php

namespace App\Games\Calc;

use function App\Engine\run;

use const App\Engine\ROUNDS_COUNT;

const MIN_NUMBER = 1;
const MAX_NUMBER = 50;

function play(): void
{
    $description = 'What is the result of the expression?';

    $rounds = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $rounds[] = generateRound();
    }

    run($description, $rounds);
}

function generateRound(): array
{
    $a = random_int(MIN_NUMBER, MAX_NUMBER);
    $b = random_int(MIN_NUMBER, MAX_NUMBER);
    $operators = ['+', '-', '*'];
    $operator = $operators[array_rand($operators)];

    $question = "{$a} {$operator} {$b}";

    $correctAnswer = calculate($a, $b, $operator);

    return [$question, $correctAnswer];
}

function calculate(int $a, int $b, string $operator): int
{
    if ($operator === '+') {
        return $a + $b;
    } elseif ($operator === '-') {
        return $a - $b;
    }

    return $a * $b;
}
