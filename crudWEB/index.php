<?php
require_once 'config/connect.php';
$category = mysqli_query($connect, "SELECT * FROM `category`");
$category = mysqli_fetch_all($category);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style1.css" rel="stylesheet"
    <title>Товары</title>
</head>
<body>

<!--Category-->

<table>
    <tr>
        <th>id</th>
        <th>Название</th>
        <th>Качество</th>
        <th>&#9998;</th>
        <th>&#10006;</th>
    </tr>
    <?php
        foreach ($category as $item) {
            ?>
            <tr>
                <td><?= $item[0] ?></td>
                <td><?= $item[1] ?></td>
                <td><?= $item[2] ?></td>
                <td><a href="update.php?id=<?= $item[0] ?>">Обновить</a></td>
                <td><a href="vendor/delete.php?id=<?= $item[0] ?>">Удалить</a></td>
            </tr>
    <?php
        }
    ?>
</table>
<h2>Добавить новый товар</h2>
<form action="vendor/create.php" method="post">
    <p>Название</p>
    <input type="text" name="title">
    <p>Качество</p>
    <textarea name="description"></textarea>
    <button type="submit">Добавить</button>
</form>

<!--Product-->

<?php
require_once 'config/connect.php';
$product = mysqli_query($connect, "SELECT * FROM `product`");
$product = mysqli_fetch_all($product);
?>

<table>
    <tr>
        <th>id</th>
        <th>Имя</th>
        <th>Category id</th>
        <th>&#9998;</th>
        <th>&#10006;</th>
    </tr>
    <?php
    foreach ($product as $item1) {
        ?>
        <tr>
            <td><?= $item1[0] ?></td>
            <td><?= $item1[1] ?></td>
            <td><?= $item1[2] ?></td>
            <td><a href="update_p.php?id=<?= $item1[0] ?>">Обновить</a></td>
            <td><a href="product/delete_p.php?id=<?= $item1[0] ?>">Удалить</a></td>
        </tr>
        <?php
    }
    ?>
</table>
<h2>Добавить новый товар</h2>
<form action="product/create_p.php" method="post">
    <p>Название</p>
    <input type="text" name="title1">
    <p>Category id</p>
    <input type="text" name="description1">
    <button type="submit1">Добавить</button>
</form>

<!--User-->
<?php
require_once 'config/connect.php';
$user = mysqli_query($connect, "SELECT * FROM `user`");
$user = mysqli_fetch_all($user);
?>

<table>
    <tr>
        <th>id</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Age</th>
        <th>&#9998;</th>
        <th>&#10006;</th>
    </tr>
    <?php
    foreach ($user as $item2) {
        ?>
        <tr>
            <td><?= $item2[0] ?></td>
            <td><?= $item2[1] ?></td>
            <td><?= $item2[2] ?></td>
            <td><?= $item2[3] ?></td>
            <td><a href="update_u.php?id=<?= $item2[0] ?>">Обновить</a></td>
            <td><a href="user/delete_u.php?id=<?= $item2[0] ?>">Удалить</a></td>
        </tr>
        <?php
    }
    ?>
</table>
<h2>Добавить новый товар</h2>
<form action="user/create_u.php" method="post">
    <p>First name</p>
    <input type="text" name="title2">
    <p>Last name</p>
    <input type="text" name="description2">
    <p>Age</p>
    <input type="text" name="age">
    <button type="submit">Добавить</button>
</form>

</body>
</html>