<?php
session_start();
$uname = $_POST['uname'];
if ($_POST['pass1'] == $_POST['pass2']) {
    $pass = $_POST['pass1'];
}
else {
    header("Location: signup.php");
    exit;
}

$con = new mysqli("sql101.epizy.com", "epiz_33833528", "GJUijoNKfvZ", "epiz_33833528_projekts");
$sql = "INSERT INTO users (id, uname, pass, date_c) VALUES (NULL, '$uname', '$pass', 'CURRENT_TIMESTAMP')";
if ($con->query($sql) === TRUE) {
    header("Location: index.php");
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
?>