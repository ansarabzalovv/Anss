<?php
require_once '../config/connect.php';
$title2 = $_POST['title2'];
$description2 = $_POST['description2'];
$age = $_POST['age'];

mysqli_query($connect, "INSERT INTO `user` (`id`, `first_name`, `last_name`, `age`) VALUES (NULL, '$title2', '$description2', '$age')");
header('Location: ../index.php');