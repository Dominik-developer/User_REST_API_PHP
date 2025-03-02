<?php

class Auth {

    public function Login(string $login, string $password) {

        $succes = true; //for now

        if($succes == true) {
            session_start();
            $_SESSION['LOGIN'] = true;
            header("Location: ../index.php");
        } else {
            session_start();
            $_SESSION['LOGIN'] = false;
            header("Location: ../index.php");
        }
        
    }

    public function Logout() {

        $_SESSION['LOGIN'] = false;
        session_unset();
        session_destroy();

        session_start();
        $_SESSION['LOGIN'] = false;
        header("Location: ../index.php");

    }

}

