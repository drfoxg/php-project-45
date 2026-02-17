<?php

namespace App\Games\Progression;

use function App\Engine\run;

use const App\Engine\ROUNDS_COUNT;

const MIN_LENGTH = 5;
const MAX_LENGTH = 10;
const MIN_START = 1;
const MAX_START = 50;
const MIN_STEP = 2;
const MAX_STEP = 10;

function play(): void
{
    $description = 'What number is missing in the progression?';

    $rounds = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $rounds[] = generateRound();
    }

    run($description, $rounds);
}

function generateRound(): array
{
    $length = random_int(MIN_LENGTH, MAX_LENGTH);
    $start = random_int(MIN_START, MAX_START);
    $step = random_int(MIN_STEP, MAX_STEP);
    $hiddenIndex = random_int(0, $length - 1);

    $progression = getProgression($start, $step, $length);
    $correctAnswer = (string) $progression[$hiddenIndex];
    $progression[$hiddenIndex] = '..';

    $question = implode(' ', $progression);
    return [$question, $correctAnswer];
}


function getProgression(int $start, int $step, int $length): array
{
    $progression = [];
    for ($i = 0; $i < $length; $i++) {
        $progression[] = $start + $i * $step;
    }
    return $progression;
}
