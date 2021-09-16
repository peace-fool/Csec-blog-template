<?php

function uidExists($conn, $boxName){
    $sql = "SELECT * FROM box WHERE boxName = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../login.php?error=statemantfailed");
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "s", $boxName);
    mysqli_stmt_execute($stmt);
    
    $resultData = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($resultData)){
        return $row;       
    }
    else{
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function loginUser($conn, $boxName, $flag){

    $uidExists = uidExists($conn, $boxName);
    
    if($uidExists === false){
        $sqli = "SELECT * FROM box WHERE boxId = 1;";
        $query = mysqli_query($conn,$sqli);
        $row = mysqli_fetch_array($query);
        $usrHashed = $row["boxName"];
        $checkUsr = password_verify($boxName, $usrHashed);
        if($checkUsr === false){
            header("location: ../database/logs.php");
            exit();
        }
        else{
            $pwd = $row["boxFlag"];
            $pwdcheck = password_verify($flag, $pwd);
            if($pwdcheck === false){
                header("location: ../database/logs.php");
                exit();
            }
            elseif ($pwdcheck === true) {
                session_start();
                $_SESSION["login"] = true; 
                header("location: ../addactivebox.php");
                exit();
            }
        }
    }

    $pwdHashed = $uidExists["boxFlag"];
    $checkPwd = password_verify($flag, $pwdHashed);
    
    if($checkPwd === false){
        header("location: /login.php?box=$boxName");
        exit();
    }
    elseif ($checkPwd === true) {
        session_start();
        $_SESSION["boxId"] = $uidExists["boxId"];
        $_SESSION["boxName"] = $uidExists["boxName"];
        header("location: ../activebox/$boxName.php");
        exit();
    }
}

function createUser($conn, $boxName, $password){
    $sql = "INSERT INTO box (boxName, boxFlag) VALUES (?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../addactivebox.php?error=statemantfailed");
        exit();
    }
    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ss", $boxName, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../addactivebox.php?error=none");
    exit();
}