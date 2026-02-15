# Игры разума

[![Actions Status](https://github.com/drfoxg/php-project-45/actions/workflows/hexlet-check.yml/badge.svg)](https://github.com/drfoxg/php-project-45/actions)

[![Quality Gate Status](https://sonarcloud.io/api/project_badges/measure?project=drfoxg_php-project-45&metric=alert_status)](https://sonarcloud.io/summary/new_code?id=drfoxg_php-project-45)
[![Bugs](https://sonarcloud.io/api/project_badges/measure?project=drfoxg_php-project-45&metric=bugs)](https://sonarcloud.io/summary/new_code?id=drfoxg_php-project-45)
[![Code Smells](https://sonarcloud.io/api/project_badges/measure?project=drfoxg_php-project-45&metric=code_smells)](https://sonarcloud.io/summary/new_code?id=drfoxg_php-project-45)
[![Duplicated Lines (%)](https://sonarcloud.io/api/project_badges/measure?project=drfoxg_php-project-45&metric=duplicated_lines_density)](https://sonarcloud.io/summary/new_code?id=drfoxg_php-project-45)
[![Lines of Code](https://sonarcloud.io/api/project_badges/measure?project=drfoxg_php-project-45&metric=ncloc)](https://sonarcloud.io/summary/new_code?id=drfoxg_php-project-45)
[![Reliability Rating](https://sonarcloud.io/api/project_badges/measure?project=drfoxg_php-project-45&metric=reliability_rating)](https://sonarcloud.io/summary/new_code?id=drfoxg_php-project-45)
[![Security Rating](https://sonarcloud.io/api/project_badges/measure?project=drfoxg_php-project-45&metric=security_rating)](https://sonarcloud.io/summary/new_code?id=drfoxg_php-project-45)
[![Technical Debt](https://sonarcloud.io/api/project_badges/measure?project=drfoxg_php-project-45&metric=sqale_index)](https://sonarcloud.io/summary/new_code?id=drfoxg_php-project-45)
[![Maintainability Rating](https://sonarcloud.io/api/project_badges/measure?project=drfoxg_php-project-45&metric=sqale_rating)](https://sonarcloud.io/summary/new_code?id=drfoxg_php-project-45)
[![Vulnerabilities](https://sonarcloud.io/api/project_badges/measure?project=drfoxg_php-project-45&metric=vulnerabilities)](https://sonarcloud.io/summary/new_code?id=drfoxg_php-project-45)

## Описание

Набор консольных математических мини-игр. В каждой игре нужно дать три правильных ответа подряд, чтобы победить. Неверный ответ завершает игру.

Проект включает пять игр:

- **Проверка на чётность** — определить, чётное ли число.
- **Калькулятор** — вычислить результат арифметического выражения.
- **НОД** — найти наибольший общий делитель двух чисел.
- **Арифметическая прогрессия** — найти пропущенное число в последовательности.
- **Простое ли число?** — определить, является ли число простым.

## Предварительные требования

- Linux, Macos, WSL
- PHP >= 8.4
- Composer
- Make
- Git

## Установка

```bash
git clone https://github.com/drfoxg/php-project-45.git
cd php-project-45
make install
```

## Запуск игр

```bash
make brain-even          # Проверка на чётность
make brain-calc          # Калькулятор
make brain-gcd           # Наибольший общий делитель
make brain-progression   # Арифметическая прогрессия
make brain-prime         # Простое ли число?
```

Или напрямую:

```bash
./bin/brain-even
./bin/brain-calc
./bin/brain-gcd
./bin/brain-progression
./bin/brain-prime
```

## Линтер

```bash
make lint
```

## Записи тестов

- [brain-even](https://asciinema.org/a/ql812keEWZqu83aW)
- [brain-calc](https://asciinema.org/a/XxK6jbiRFtOhRlfM)
- [brain-gcd](https://asciinema.org/a/1f2f6iNtD87fNwsl)
- [brain-progression](https://asciinema.org/a/IGEfdlYrWPOcFL31)
- [brain-prime](https://asciinema.org/a/FxuHheCSxY8XomlM)