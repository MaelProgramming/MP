<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'utilisateur1')
define('DB_USERS', 'root')
define('DB_PASSWORD', 'NewPASSWORD')

$con=mysql_connect(DB_HOST, DB_USERS, DB_PASSWORD) or die("Failed to connect to Mysql:".mysql_error())

function newUser()
{
    $fullname = $_POST['Name']
    $username = $_POST['usernmame']
    $email = $_POST['Email']
    
}
?>
