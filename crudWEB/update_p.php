<?php
require_once 'config/connect.php';
$product_id = $_GET['id'];
$products = mysqli_query($connect, "SELECT * FROM `product` WHERE 'id'='$product_id'");
$products = mysqli_fetch_assoc($products);
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
<form action="product/update_p.php" method="post">
    <input type="hidden" name="id" value="<?= $product_id ?>">
    <p>Название</p>
    <input type="text" name="title1" value="<?= $products['title1'] ?>">
    <p>Category id</p>
    <textarea name="description1"><?= $products['description1'] ?></textarea>
    <button type="submit1">Обновить</button>
</form>

</body>
</html>
