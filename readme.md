# Prime Factors

## Условия задачи

1 => []
2 => [2]
4 => 2 * 2
5 => 5
6 => 2 * 3
12 => 2 * 2 * 3
100 => 2 * 2 * 5 * 5

## Начало (подготовка)

- создаем `composer.json`
- `composer install`
- создаем класс тестирования Боулинг `vendor/ bin/phpspec describe PrimeFactors`
- запускаем тест `vendor/bin/phpspec run` и создаем класс приложения

## Приступаем к разработке

С чего начать? У нас есть ТЗ, начнем сверху. Пишем тест, потом код, чтобы тест был "зеленым".
- сделаем тест для 1 и 2, напишем код, работает;
- сделаем тест для 3 и 4, напишем код, работает;
- 4 return на 1 метод - это слишком, рефакторинг - работает;
- сделаем тест для 5, 6 и 8, напишем код, работает;
- сделаем тест для 9 и 100, напишем код, работает;

