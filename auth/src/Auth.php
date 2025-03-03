<?php

class Auth {
    private PDO $conn;

    public function __construct(Connect $database)
    {
        $this->conn = $database->getConnection();
    }

    public function Login (string $login, string $password): never {

        $sql = "SELECT * FROM admin WHERE login = :login";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":login", $login, PDO::PARAM_STR);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->execute();

        if (!$row || !password_verify($password, $row['PASSWORD'])) {

            session_start();
            $_SESSION['LOGIN'] = false;
            $_SESSION["mess"] = "Wrong password";
            header("Location: ../index.php?window=login");
            exit;
        }

        session_start();
        $_SESSION['LOGIN'] = true;
        header("Location: ../index.php?window=users");
        exit;
    }

    public function Logout(): never {

        session_start();
        session_unset();
        session_destroy();
        header("Location: ../index.php?window=login");
        exit();

    }
}

