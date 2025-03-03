<!DOCTYPE html>
<?php

session_start();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <link rel="stylesheet" href="./src/styles.css">

    <meta http-equiv="Cache-Control" content="no-store">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
</head>
<body>
    <nav class="navbar">
        <div class="admin">Admin</div>
        <div class="buttons">
            <?php if(!isset($_SESSION['LOGIN']) || $_SESSION['LOGIN'] !== true) {
                ?>
                <a><button style="visibility: hidden;">LOG IN</button></a>
                <?php
            } else {
                ?>
                <a a href="?window=add"><button>ADD USER</button></a>
                <a a href="?window=users"><button>VIEW USERS</button></a>
                <a href="./auth/index.php?action=logout"><button>LOG OUT</button></a>
                <?php
            }
            ?>
        </div>
    </nav>
    <main class="container mt-4">

        <?php 
            if(!isset($_SESSION['LOGIN']) || $_SESSION['LOGIN'] !== true) {
                
                if(isset($_SESSION["mess"])) $mess = $_SESSION["mess"];
            
                include_once "./components/Login.php";

            } else {

                if(!isset($_GET["window"]) || $_GET == "") {

                    include_once "./components/Error.php";

                } elseif ($_GET["window"] == "users" || $_GET["window"] == "login" && $_SESSION['LOGIN'] == true) {
        
                    include_once "./components/Users.php";
        
                } elseif ($_GET["window"] == "add") {

                    include_once "./components/Add.php";
        
                } else {

                    include_once "./components/Error.php";

                }
            }
        ?>
    </main>

    <script src="./src/scripts.js"></script>
</body>
</html>