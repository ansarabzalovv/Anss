<?php
require_once 'config/connect.php';
$user_id = $_GET['id'];
$users = mysqli_query($connect, "SELECT * FROM `product` WHERE 'id'='$user_id'");
$users = mysqli_fetch_assoc($users);
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
<form action="user/update_u.php" method="post">
    <input type="hidden" name="id" value="<?= $user_id ?>">
    <p>First name</p>
    <input type="text" name="title2" value="<?= $users['title2'] ?>">
    <p>Last name</p>
    <input type="text" name="description2" value="<?= $users['description2'] ?>">
    <p>Age</p>
    <input type="text" name="age" value="<?= $users['age'] ?>">
    <button type="submit">Обновить</button>
</form>

</body>
</html>
