<?php
session_start();
$user_id = $_SESSION["user_id"];
$reply = $_POST['reply'];
$post_id = $_POST['post_id'];
$con = new mysqli("sql101.epizy.com", "epiz_33833528", "GJUijoNKfvZ", "epiz_33833528_projekts");

$sql = "INSERT INTO replies (id, posts_id, users_id, reply, date) VALUES (NULL, '$post_id', '$user_id', '$reply', CURRENT_TIMESTAMP)";
    if ($con->query($sql) === TRUE) {
        header("Location: replies.php?id=$post_id");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
?>