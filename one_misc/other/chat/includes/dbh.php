<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "chat_db";
// connection to the database
$conn = mysqli_connect($servername, $username, $password, $db) or die(mysqli_error($conn));

//create database
//$db = mysqli_query($conn,"CREATE DATABASE IF NOT EXIST `chat_db`");
//mysqli_select_db($conn,"chat_db");

//create table
//$table = "CREATE TABLE IF NOT EXISTS `users_tb`(`id` INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL, `username` TEXT NOT NULL, `password` INT(11) NOT NULL; `date` datetime)ENGINE = InnoDB";
//mysqli_query($conn,"CREATE TABLE IF NOT EXISTS `users_tb`(`id` INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL, `username` TEXT NOT NULL, `password` INT(11) NOT NULL; `date` datetime");
?>