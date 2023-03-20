<?php
session_start();
$uname = $_POST['uname'];
$pass = $_POST['pass'];
$con = new mysqli("sql101.epizy.com", "epiz_33833528", "GJUijoNKfvZ", "epiz_33833528_projekts");
$sql = "SELECT * FROM users WHERE uname = '$uname' AND pass = '$pass'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    $_SESSION["OK"] = TRUE;
    while($row = $result->fetch_assoc()) {
        $_SESSION["user_id"] = $row['id'];
    }
    header("Location: home.php");
    }
else {
    header("Location: index.php");
}

$con->close();
?>