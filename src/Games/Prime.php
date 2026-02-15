<?php

namespace App\Games\Prime;

use function App\Engine\run;

use const App\Engine\ROUNDS_COUNT;

// Простое число — делится только на 1 и на себя.
// Функция проверяет, есть ли у числа другие делители.
// Если у числа есть делитель больше его корня,
// то парный делитель обязательно меньше корня.
function isPrime(int $number): bool
{
    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i * $i <= $number; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}

function generateRound(): array
{
    $number = random_int(1, 100);
    $correctAnswer = isPrime($number) ? 'yes' : 'no';
    return [(string) $number, $correctAnswer];
}

function play(): void
{
    $description = 'Answer "yes" if given number is prime. Otherwise answer "no".';

    $rounds = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $rounds[] = generateRound();
    }

    run($description, $rounds);
}
