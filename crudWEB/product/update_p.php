<?php
require_once '../config/connect.php';
$title1 = $_POST['title1'];
$description1 = $_POST['description1'];
$id1 = $_POST['id'];
mysqli_query($connect, "UPDATE `product` SET `name` = '$title1', `category_id` = '$description1' WHERE `product`.`id` = '$id1'");
header('Location: ../index.php');