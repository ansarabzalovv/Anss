<?php
require_once '../config/connect.php';
$id1 = $_GET['id'];
mysqli_query($connect, "DELETE FROM `product` WHERE `product`.`id` = '$id1'");
header('Location: ../index.php');