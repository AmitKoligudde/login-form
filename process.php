<?php

$username = $_POST['user'];
$password = $_POST['pass'];

#connect to database

$conn = mysql_connect("localhost", "root", "");
$db = mysql_select_db("login");


$result = mysql_query("select * from user where username='$username' and password='$password'")
        or die("Failed to query database" . mysql_error());

$row = mysql_fetch_array($result);

if ($row['username'] == $username && $row['password'] == $password) {
    echo "Login Sucessful !!! WelCome" . $row['username'];
} else {
    echo "Failed to Login....";
}
?>          