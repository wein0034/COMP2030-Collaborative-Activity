<?php
    session_start();
    include('inc/dbconn.inc.php');
    if (isset($_POST['register'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        $query = $connection->prepare("SELECT * FROM users WHERE email=:email");
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->execute();
        if ($query->rowCount() > 0) {
            echo '<div class="error">The email address is already registered. Select forgot your password to reset password.</div>';
        }
        if ($query->rowCount() == 0) {
            $query = $connection->prepare("INSERT INTO users(name,password,email) VALUES (:name,:password_hash,:email)");
            $query->bindParam("name", $name, PDO::PARAM_STR);
            $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
            $query->bindParam("email", $email, PDO::PARAM_STR);
            $result = $query->execute();
            if ($result) {
                echo '<div class="success">Your registration was successful. Welcome to Senior!</div>';
            } else {
                echo '<div class="error">Something went wrong, try again later.</div>';
            }
        }
    }

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $query = $connection->prepare("SELECT * FROM users WHERE email=:email");
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if (!$result) {
            echo '<div class="error">Email address is not registered.</div>';
        } else {
            if (password_verify($password, $result['password'])) {
                $_SESSION['user_id'] = $result['id'];
                echo '<div class="success">Congratulations, you are logged in!</div>';
            } else {
                echo '<div class="error">Password entered is incorrect. Please select Forgot your password? to reset password.</div>';
            }
        }
    }
?>