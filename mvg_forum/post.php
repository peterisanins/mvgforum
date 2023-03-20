<?php
session_start();
$user_id = $_SESSION["user_id"];
$post = $_POST['post'];
$con = new mysqli("sql101.epizy.com", "epiz_33833528", "GJUijoNKfvZ", "epiz_33833528_projekts");

$sql = "INSERT INTO posts (id, users_id, post, date) VALUES (NULL, '$user_id', '$post', CURRENT_TIMESTAMP)";
    if ($con->query($sql) === TRUE) {
        header("Location: home.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
?>