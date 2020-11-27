<?php
$host = "sql3.freemysqlhosting.net";
$user = "sql3378749";
$password = "Q4AqyG3M93";
$database = "sql3378749";
$con = mysqli_connect($host, $user, $password, $database);
if (mysqli_connect_errno()){
    echo "Connection Fail: ".mysqli_connect_errno();exit;
}
