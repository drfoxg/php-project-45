<?php

namespace App\Games\Calc;

use function App\Engine\run;

use const App\Engine\ROUNDS_COUNT;

function generateRound(): array
{
    $num1 = random_int(1, 50);
    $num2 = random_int(1, 50);
    $operators = ['+', '-', '*'];
    $operator = $operators[array_rand($operators)];

    $question = "{$num1} {$operator} {$num2}";

    switch ($operator) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
    }

    return [$question, (string) $result];
}

function play(): void
{
    $description = 'What is the result of the expression?';

    $rounds = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $rounds[] = generateRound();
    }

    run($description, $rounds);
}
