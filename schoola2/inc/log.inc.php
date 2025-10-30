<?php
// Проверяем, существует ли папка log
if (!is_dir('log')) {
    mkdir('log', 0777, true);
}

// Текущее время
$dt = time();

// Какая страница открыта
$page = $_SERVER['REQUEST_URI'] ?? '';

// Откуда пришёл пользователь
$ref = $_SERVER['HTTP_REFERER'] ?? '-';

// Формируем строку для записи
$path = $dt . '|' . $page . '|' . $ref . "\n";

// Записываем в файл журнала
file_put_contents(PATH_LOG, $path, FILE_APPEND | LOCK_EX);
?>
