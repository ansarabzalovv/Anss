<?php
    require_once '../config/connect.php';
    $title = $_POST['title'];
    $description = $_POST['description'];
    $id = $_POST['id'];
    mysqli_query($connect, "UPDATE `category` SET `name` = '$title', `quality` = '$description' WHERE `category`.`category_id` = '$id'");
    header('Location: ../index.php');