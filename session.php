<?php
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db("kontrakan", $connection);
session_start();
$user_check=$_SESSION['login'];
$ses_sql=mysqli_query("SELECT username from user where username ='$user_check'", $connection);
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
mysqli_close($connection);
header('Location:index.php');
}
?>
