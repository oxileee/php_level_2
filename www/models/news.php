<?php

require_once __DIR__ . '/../functions/sql.php';

function News_getAll()
{
    $sql = "SELECT * FROM news ORDER BY id";
    return Sql_query($sql);
}

function News_add($data)
{
    $sql = "
        INSERT INTO 
        news 
        (title, text) 
        VALUES 
        ('" . $data['title'] . "', '" . $data['news'] . "')";
    Sql_exec($sql);
}

function News_delete($title)
{
    $res = mysqli_query(connectToDB(), "DELETE FROM news WHERE title='" . $title . "'");
    return $res;
}
/*
function uploadFile($file)
{
    $extensions = ['image/jpg', 'image/png', 'image/jpeg', 'image/gif'];
    if (is_uploaded_file($_FILES['image']['tmp_name']) && in_array($_FILES['image']['type'], $extensions)) {
        return move_uploaded_file($_FILES['image']['tmp_name'], __DIR__ . '/img//' . $file);
    } else {
        switch ($_FILES['image']['error']) {
            case '0':
                $_SESSION['error'] = 'Файл не является изображением';
                break;
            case '1':
                $_SESSION['error'] = 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
                break;
            case '2':
                $_SESSION['error'] = 'Максимальный размер файла: 300kb';
                break;
            case '3':
                $_SESSION['error'] = 'The uploaded file was only partially uploaded';
                break;
            case '4':
                $_SESSION['error'] = 'Не выбран файл для загрузки';
                break;
            case '6':
                $_SESSION['error'] = 'Missing a temporary folder';
                break;
            case '7':
                $_SESSION['error'] = 'Failed to write file to disk.';
                break;
            case '8':
                $_SESSION['error'] = 'A PHP extension stopped the file upload.';
                break;
        }
    }
    return false;
}
*/
?>