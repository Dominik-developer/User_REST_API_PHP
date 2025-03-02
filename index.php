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
                <a href="./auth/index.php?action=logout"><button>LOG OUT</button></a>
                <?php
            }
            ?>
        </div>
    </nav>
    <main class="container mt-4">
        <?php

        if(!isset($_GET["window"]) || $_GET == "" || $_GET["window"] == "login") {
            
            
            include_once "./components/Login.php";
            
        } elseif ($_GET["window"] == "users") {

            include_once "./components/Users.html";

        } elseif ($_GET["window"] == "add") {
            include_once "./components/Add.html";

        } else {
            include_once "./components/Error.html";
        }
        ?>
        </main>

    <script src="./src/scripts.js"></script>
</body>
</html>