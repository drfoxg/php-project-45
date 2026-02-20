<?php

namespace App\Games\Calc;

use function App\Engine\run;

const MIN_NUMBER = 1;
const MAX_NUMBER = 50;
const DESCRIPTION = 'What is the result of the expression?';

function play(): void
{
    run(DESCRIPTION, __NAMESPACE__ . '\\generateRound');
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
