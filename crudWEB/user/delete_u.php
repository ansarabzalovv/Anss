<?php
require_once '../config/connect.php';
$id2 = $_GET['id'];
mysqli_query($connect, "DELETE FROM `user` WHERE `user`.`id` = '$id2'");
header('Location: ../index.php');