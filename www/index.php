<?php
require __DIR__ . '/models/news.php'; // модель для работы с БД новостей

$news = News_getAll();

include __DIR__ . '/views/index.php'; // вывод на экран новостей
?>