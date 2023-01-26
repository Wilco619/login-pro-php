<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/b8af3acdf2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <header id="topheader">
        <ul>
            
            <?php
                if (isset($_SESSION["userUid"])){
                    echo "<li><a href='index.php'>Home</a></li>";
                    echo "<li><a href='profile.php'>Profile page</a></li>";
                    echo "<li><a href='includes/logout.inc.php'>Log out</a></li>";
                    echo "<li><a href='#'><i class='fa fa-light fa-bars'></i></a></li>";
                }
                else{
                    echo "<li><a href='signup.php'>Sign up</a></li>";
                    echo "<li><a href='login.php'>Log in</a></li>";
                }
            ?>
            
            
        </ul>
    </header>

    <div id="wrap">