<?php

function setComment($conn){
    if(isset($_POST['commentSubmit'])){
        $box = $_POST['box'];
        $uid = $_POST['uid'];
        $message = $_POST['message'];

        $sql = "INSERT INTO comments (box, uid, message) VALUES ('$box','$uid', '$message')";
        $results = $conn->query($sql);
    }
}

function getComment($conn, $box){
    $sql = "SELECT * FROM comments WHERE box = '".$box."'";
    $results = $conn->query($sql);
    while ($row = $results->fetch_assoc()) {
        echo "<div class='comment-box'><p class = 'name'>";
            echo $row['uid']."</p><p class = 'comment'>";
            echo $row['message'];
        echo "</p></div>";
    }
}