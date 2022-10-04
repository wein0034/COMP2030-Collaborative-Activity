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
            echo '<p class="error">The email address is already registered. Select forgot your password to reset password.</p>';
        }
        if ($query->rowCount() == 0) {
            $query = $connection->prepare("INSERT INTO users(name,password,email) VALUES (:name,:password_hash,:email)");
            $query->bindParam("name", $name, PDO::PARAM_STR);
            $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
            $query->bindParam("email", $email, PDO::PARAM_STR);
            $result = $query->execute();
            if ($result) {
                echo '<p class="success">Your registration was successful. Welcome to Senior!</p>';
            } else {
                echo '<p class="error">Something went wrong, try again later.</p>';
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
            echo '<p class="error">Email address is not registered.</p>';
        } else {
            if (password_verify($password, $result['password'])) {
                $_SESSION['user_id'] = $result['id'];
                echo '<p class="success">Congratulations, you are logged in!</p>';
            } else {
                echo '<p class="error">Password entered is incorrect. Please select Forgot your password? to reset password.</p>';
            }
        }
    }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>SENIOR - New and Returning Users</title>
    <meta charset="UTF-8">
    <meta name="author" content="rich0485, roaj0001, wein0034">
    
    <script src="scripts/helperfunctions.js" defer></script>
    <script src="scripts/collapsiblemenu.js" defer></script>
    <script src="scripts/login.js" defer></script>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>


    <?php require_once "inc/top.inc.php"; ?> 
    <?php require_once "inc/search.inc.php"; ?>

    <div class="outerlogin">
        <div class="small-col">
            <img id="kettle" src="images/kettle.png" height=70%>
        </div>

        <div class="small-col">
            <button type="submit" id="loginsignup" class="collapsible">New user? Click here to create an account!</button>
        
            <div class="innerlogin">
            <form action="" method="POST">
                    <label><b>Name</b></label>
                    <input type="text" name="name" id="name" required>
                    </p>

                    <label><b>Email Address</b></label>
                    <input type="email" name="email" id="email" required>
                    </p>

                    <label><b>Password</b></label>
                    <input type="password" name="password" id="password" minlength="8" required>
                    </p>

                    <input type="submit" name="register" id="register" value="Create Account">
                   
                </form>
            </div>


            <button type="submit" id="loginsignup" class="collapsible">Returning user? Sign in here!</button>

            <div class="innerlogin">
                <form method="post" action="">
                    <label><b>Email Address</b></label>
                    <input type="email" name="email" id="email" required>
                    </p>

                    <label><b>Password</b>
                    <input type="password" name="password" id="passwordsignin" required>
                    </p>

                    <input type="submit" name="login" id="login" value="Sign in">
                 
                </form>
            </div>



            <p class="forgotpassword"><a href="forgotpassword.html">Forgot your password?</a></p>
            <p class="tos">By continuing, you agree to our Terms of Service and Privacy Notice.</p><br><br><br>
        </div>
    </div>

   <?php require_once "inc/bottom.inc.php"; ?>
</body>
</html>