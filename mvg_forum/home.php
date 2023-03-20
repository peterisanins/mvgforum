<?php
session_start();
$ses = $_SESSION["OK"];
$user_id = $_SESSION["user_id"];
if ($ses == TRUE){
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel="stylesheet" href="css/style.css">
        <link rel='stylesheet' href='css/home.css'>
        <title>MVG forum</title>
    </head>
    <body>
        <div class="header">
            <a href='home.php'><h2>MVG forum</h2></a>
        </div>
        <div class="post-bar">
        <form action="post.php" method="post">
            <input type="text" name="post">
        </form>
        </div>
        <div class="container">
            <?php
                $con = new mysqli("sql101.epizy.com", "epiz_33833528", "GJUijoNKfvZ", "epiz_33833528_projekts");
                $sql = "SELECT * FROM posts ORDER BY date DESC";
                $result = $con->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $users_id = $row['users_id'];
                        $post = $row['post'];
                        $date = $row['date'];
                        $post_id = $row['id'];
                        
                        // Retrieve the username from the users table based on the users_id value
                        $users_query = "SELECT uname FROM users WHERE id = $users_id";
                        $users_result = $con->query($users_query);
                        $user_row = $users_result->fetch_assoc();
                        $username = $user_row['uname'];
                        
                        echo "<div class='row ieraksts'>
                        <p class='username'>$username</p>
                        <a href='replies.php?id=$post_id'>$post</a>
                        <p class='date'>$date</p>
                        </div>";
                    }
                }
            ?>
        </div>
        
    </body>
    </html>
<?php
}
else{
    header("Location: index.php");
}