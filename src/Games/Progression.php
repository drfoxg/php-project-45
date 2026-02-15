<?php

namespace App\Games\Progression;

use function App\Engine\run;

use const App\Engine\ROUNDS_COUNT;

function generateProgression(int $start, int $step, int $length): array
{
    $progression = [];
    for ($i = 0; $i < $length; $i++) {
        $progression[] = $start + $i * $step;
    }
    return $progression;
}

function generateRound(): array
{
    $length = random_int(5, 10);
    $start = random_int(1, 50);
    $step = random_int(2, 10);
    $hiddenIndex = random_int(0, $length - 1);

    $progression = generateProgression($start, $step, $length);
    $correctAnswer = (string) $progression[$hiddenIndex];
    $progression[$hiddenIndex] = '..';

    $question = implode(' ', $progression);
    return [$question, $correctAnswer];
}

function play(): void
{
    $description = 'What number is missing in the progression?';

    $rounds = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $rounds[] = generateRound();
    }

    run($description, $rounds);
}
