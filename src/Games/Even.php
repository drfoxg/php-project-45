<?php

namespace App\Games\Even;

use function App\Engine\run;

use const App\Engine\ROUNDS_COUNT;

function generateRound(): array
{
    $number = random_int(1, 100);
    $correctAnswer = $number % 2 === 0 ? 'yes' : 'no';
    return [(string) $number, $correctAnswer];
}

function play(): void
{
    $description = 'Answer "yes" if the number is even, otherwise answer "no".';

    $rounds = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $rounds[] = generateRound();
    }

    run($description, $rounds);
}
