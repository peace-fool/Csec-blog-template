<?php

if(isset($_POST["submit"])){
    $name = $_POST["box"];
    $pwd = $_POST["password"];
   
    require_once '/include/dbh.inc.php';
    require_once '/include/functions.inc.php';

    createUser($conn, $name, $pwd);
}
else{
    header("location: /addactivebox.php");
    exit();
}