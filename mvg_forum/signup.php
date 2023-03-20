<?php
session_start();
session_unset();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
    <title>login</title>
</head>
<body>
  <form action="add.php" method="post">
    <div class="login">
      <h1>Account login</h1>
      <p>username</p>
      <input type='text' name='uname'/>
      <p>password</p>
      <input type='password' name='pass1'/>
      <p>password</p>
      <input type='password' name='pass2'/>
      <button>sign up</button>
    </div>
  </form>
</body>
</html>