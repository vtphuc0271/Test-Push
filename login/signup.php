<?php
session_start();
// insert database
//require "../models/db.php"; 
// require "register.php";

if (isset($_POST['submit'])) {

    $connection =  mysqli_connect("localhost", "root", "", "nhom9", 3306);
    $username = $_POST['username'];
    $password = $_POST['password'];

    $password1 = $_POST['password'];
    $password1 = md5($password1);

    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $id = null;
    echo $username;
    echo $id;
    // $stmt = $connection->prepare("INSERT INTO `sign_up` (`id`, `username`, `email`, `phone`,`address`,`password`) VALUES (?, ?, ?, ?, ?, ?)");
    // $stmt->bind_param("ssssss",$dinkhum, $username, $email,$phone,$address,$password);
    // $stmt->execute();

    $stmt1 = $connection->prepare("INSERT INTO `users` (`user_id`, `username`,`password`) VALUES ( ?, ?, ?)");
    $stmt1->bind_param("sss", $id, $username, $password1);
    $stmt1->execute();
}
header("location:index.php");




// $sql = "INSERT INTO `sign_up`(`id`, `username`, `email`, `phone`,`address`,`password`) VALUES (null, '$username', '$email', '$phone','$address','$password')";
// $sql .= "INSERT INTO `users` (`user_id`, `username`,`password`,`role_id`) VALUES (10, '$username','$password1',10)";
// $connection->set_charset("utf8");
// mysqli_multi_query($connection,$sql);