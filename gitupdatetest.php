<?php
session_start();
echo $username=$_SESSION['login'];
echo "<br>";
echo $password=$_SESSION['access_token'];
?>