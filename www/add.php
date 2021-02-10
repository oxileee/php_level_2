<?php
require __DIR__ . '/models/news.php';

if (!empty($_POST)) {
    $data = [];
    if(!empty($_POST['title'])) {
        $data['title'] = $_POST['title'];
    }
    if(!empty($_POST['news'])) {
        $data['news'] = $_POST['news'];
    }

    if(isset($data['title']) && isset($data['news'])){
        News_add($data);
        header('Location: /');
    }

}

include __DIR__ . '/views/add.php';
?>