<?php
    require_once '../config/connect.php';
    $title = $_POST['title'];
    $description = $_POST['description'];

    mysqli_query($connect, "INSERT INTO `category` (`category_id`, `name`, `quality`) VALUES (NULL, '$title', '$description')");
    header('Location: ../index.php');