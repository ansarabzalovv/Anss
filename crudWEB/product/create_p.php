<?php
require_once '../config/connect.php';
$title1 = $_POST['title1'];
$description1 = $_POST['description1'];

mysqli_query($connect, "INSERT INTO `product` (`id`, `name`, `category_id`) VALUES (NULL, '$title1', '$description1')");
header('Location: ../index.php');