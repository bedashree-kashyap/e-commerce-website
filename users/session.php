<?php
include('config.php');
session_start();

$user_check = $_SESSION['phonenumber'];
$session_sql = mysqli_query($db, "SELECT phonenumber from users where phonenumber = '$user_check';");
$row = mysqli_fetch_array($session_sql, MYSQLI_ASSOC);

$_SESSION['phonenumber'] = $row['phonenumber'];

if(!isset($_SESSION['phonenumber'])){
  header("location:login.php");
  die();
}
 ?>