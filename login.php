<!-- contributor: Jessica Richardson rich0485 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>SENIOR -- New and Returning Users</title>
    <meta charset="UTF-8">
    <meta name="author" content="rich0485, roaj0001, wein0034">
    
    <script src="scripts/helperfunctions.js" defer></script>
    <script src="scripts/collapsiblemenu.js" defer></script>
    <script src="scripts/login.js" defer></script>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body class="login">

    <?php require_once "inc/top.inc.php"; ?> 
    <?php require_once "inc/search.inc.php"; ?>



    <div class="message">
        <?php require_once "inc/register.inc.php"; ?> 
    </div>
    <div class="outerlogin">
        <div class="small-col">
            <img id="kettle" src="images/kettle.png" height=60%>
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