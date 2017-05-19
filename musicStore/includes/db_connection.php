<?php
//step1: create database connection
$dbhost = "localhost";
$dbuser = "musicUser";
$dbpass = "musicpassword";
$dbname = "musicStore";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// Test if connection succeeded
  if(mysqli_connect_errno()) {
    die("Database connection failed: " . 
         mysqli_connect_error() . 
         " (" . mysqli_connect_errno() . ")"
    );
  }
?>