<?php
    require_once '../config/connect.php';
    $id = $_GET['id'];
    mysqli_query($connect, "DELETE FROM `category` WHERE `category`.`category_id` = '$id'");
    header('Location: ../index.php');