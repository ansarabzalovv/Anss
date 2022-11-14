<?php
require_once 'config/connect.php';
$category_id = $_GET['id'];
$categories = mysqli_query($connect, "SELECT * FROM `category` WHERE 'category_id'='$category_id'");
$categories = mysqli_fetch_assoc($categories);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/style1.css" rel="stylesheet">
    <title>Обновить товар</title>
</head>
<body>

<h2>Обновить товар</h2>
<form action="vendor/update.php" method="post">
    <input type="hidden" name="id" value="<?= $category_id ?>">
    <p>Название</p>
    <input type="text" name="title" value="<?= $categories['title'] ?>">
    <p>Качество</p>
    <textarea name="description"><?= $categories['description'] ?></textarea>
    <button type="submit">Обновить</button>
</form>

</body>
</html>
