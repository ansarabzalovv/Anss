<?php
require_once '../config/connect.php';
$title2 = $_POST['title2'];
$description2 = $_POST['description2'];
$age = $_POST['age'];
$id2 = $_POST['id'];
mysqli_query($connect, "UPDATE `user` SET `first_name` = '$title2', `last_name` = '$description2', `age` = '$age' WHERE `user`.`id` = '$id2'");
header('Location: ../index.php');