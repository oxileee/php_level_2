<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <h1>Список новостей</h1>
    <table border="1">
        <tr>
            <th>Заголовок</th>
            <th>Текст</th>
        </tr>
            <?php foreach ($news as $value) : ?>
        <tr>
                <td><?php echo $value['title']; ?></td>
                <td><?php echo $value['text']; ?></td>
        </tr>
            <?php endforeach; ?>
    </table>

<a href="/add.php">Добавить новость</a>

</body>
</html>