<?php

/*
 * Тест скриптов
 */

use task\Task;

// Настройка среды
//
$appDebug = true;

// Режим отладки
if ($appDebug) {
    // Добавлять в отчёт все ошибки PHP
    error_reporting(E_ALL);
    ini_set('display_startup_errors', 1);
    // Выводить ошибки скрипта в поток stdout
    ini_set('display_errors', 'stdout'); // display_errors = stderr | stdout
}

require_once './LinkShorter.php';
require_once './DataHandler.php';
require_once './Task.php';

// Тестирование скриптов в браузере
//
// Тест LinkShorter.php
echo '<form method="post" action="/">
    <input type="text" name="url" value="абырвалгhttp://пишу_на_php">
    <input type="submit" value="Отправить">
    </form>';

// Тест Task.php
$fieldsCount = '10';
$chipCount = 5;
$task = new Task($fieldsCount, $chipCount);

// Публичный доступ к динамически созданному свойству $task->dataHandler
// Так как оно создано динамически, область видимости по умолчанию - публичная
print_r($task->dataHandler);

// Публичный доступ к динамически созданному свойству $task->chipCount
// Так как оно создано динамически, область видимости по умолчанию - публичная
print_r($task->setChipCount($chipCount));
echo ' *** $task->chipCount = ', $task->chipCount, ' *** ';

$task->start();
