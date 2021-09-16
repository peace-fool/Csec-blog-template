<?php

if(isset($_POST["submit"])){
    $boxName = $_POST["box"];
    $flag = $_POST["password"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    loginUser($conn, $boxName, $flag);
}
else{
    header("location: ../index.php");
    exit();
}