<?php
$id = $_GET['ID'];
//$lastname = $_GET['last_name'];

$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "UPDATE  `users` SET last_name = 'saima' WHERE `users`.`ID` =$id";
//$query ="UPDATE  `students`.`users` SET last_name=' ' WHERE `users`.`ID` = $id";
//$query = "update users WHERE ID= $id";

$result=mysqli_query($link, $query);

//mysql_fetch_array($result);


header('location:list1.php');
?>