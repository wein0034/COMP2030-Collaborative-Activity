<!-- contributor: Jessica Richardson rich0485 -->

<?php
    // connect to database
    require 'sessionstart.inc.php';
    include('inc/dbconn.inc.php');

    // register form
    if (isset($_POST['register'])) 
    {

        // retrieving form details
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // creating password hash
        $password_hash = password_hash($password, PASSWORD_BCRYPT);

        // query preparation, binding parameters and executing
        $query = $connection->prepare("SELECT * FROM users WHERE email=:email");
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->execute();

        // if email address already registered
        if ($query->rowCount() > 0) 
        {
            echo '<div class="error">The email address is already registered. Select forgot your password to reset password.</div>';
        }

        // if email not registered, send data to database
        if ($query->rowCount() == 0) 
        {
            $query = $connection->prepare("INSERT INTO users(name,password,email) VALUES (:name,:password_hash,:email)");
            $query->bindParam("name", $name, PDO::PARAM_STR);
            $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
            $query->bindParam("email", $email, PDO::PARAM_STR);
            $result = $query->execute();

            // successful registration
            if ($result) 
            {
                echo '<div class="success">Your registration was successful. Welcome to Senior!</div>';
                $_SESSION['username'] = $name;
            } 

            // failed registration
            else 
            {
                echo '<div class="error">Something went wrong, try again later.</div>';
            }
        }
    }

    // login form
    if (isset($_POST['login'])) 
    {

        // retreiving form detials
        $email = $_POST['email'];
        $password = $_POST['password'];

        // creating query, binding parameters and executing
        $query = $connection->prepare("SELECT * FROM users WHERE email=:email");
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->execute();

        // fetching email + password from database
        $result = $query->fetch(PDO::FETCH_ASSOC);

        // error message if email not registered
        if (!$result) 
        {
            echo '<div class="error">Email address is not registered.</div>';
        } 

        // successful message if correct email + password
        else 
        {
            if (password_verify($password, $result['password'])) 
            {
                $_SESSION['username'] = $result['name'];
                echo '<div class="success">Congratulations, you are logged in!</div>';
            } 

            // error message if incorrect password
            else 
            {
                echo '<div class="error">Password entered is incorrect. Please select "Forgot your password?" to reset password.</div>';
            }
        }
    }
?>