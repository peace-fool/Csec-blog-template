<?php

function setComment($conn){
    if(isset($_POST['commentSubmit'])){
        $uid = $_POST['uid'];
        $message = $_POST['message'];

        $sql = "INSERT INTO comments (uid, message) VALUES ('$uid', '$message')";
        $results = $conn->query($sql);
    }
}

function getComment($conn){
    $sql = "SELECT * FROM comments";
    $results = $conn->query($sql);
    while ($row = $results->fetch_assoc()) {
        echo "<div class='comment-box'><p class = 'name'>";
            echo $row['uid']."</p><p class = 'comment'>";
            echo $row['message'];
        echo "</p></div>";
    }
    
    
}