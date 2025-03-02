<?php

declare(strict_types=1);

spl_autoload_register(function  ($class) {
    require __DIR__ ."/src/$class.php";
});

$database = new Connect("localhost", "user_db", "root", "root");

$auth = new Auth();

$url_param = $_GET['action'] ?? '';

$login= $_POST['login'] ?? '';
$password = $_POST['password'] ?? '';

switch($url_param) {
        case "logout" :
            $auth->Logout();
            break;

        case "login":
            $auth->Login($login, $password);
            break;
            
        default:
            echo "Error";
            break;      
}
