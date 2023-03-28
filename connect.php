<?php
error_reporting(0);
mysqli_report(MYSQLI_REPORT_OFF);

$db = mysqli_connect('localhost', 'root', '', 'gb') or die('Ошибка соединения с БД');

mysqli_set_charset($db, 'utf8mb4') or die('Не установлена кодировка');