<!DOCTYPE html>
<html lang="en">

<head>
    <title>SENIOR - New and Returning Users</title>
    <meta charset="UTF-8">
    <meta name="author" content="rich0485, roaj0001, wein0034">
    <script src="scripts/collapsiblemenu.js" defer></script>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <?php require_once "inc/top.inc.php"; ?> 
    <?php require_once "inc/search.inc.php"; ?>

    <div class="outerlogin">
        <img id="tent" src="images/tent.jpg">

        <button type="submit" class="collapsible">New user? Click here to create an account!</button>
        
        <div class="innerlogin">
            <form>
                <label><b>Name</b>
                <input type="text" name="Name" id="name" required>
                </p>

                <label><b>Email Address</b>
                <input type="email" name="Email" id="email" required>
                </p>

                <label><b>Password</b>
                <input type="password" name="Password" id="password" minlength="8" required>
                </p>

                <label><b>Confirm Password</b>
                <input type="password" name="Password" id="password" required>
                </p>

                <input type="submit" name="CreateAccount" id="createaccount" value="Create Account">
                <!-- need to add in code for submission-->
            </form>
        </div>

        <button type="submit" class="collapsible">Returning user? Sign in here!</button>

        <div class="innerlogin">
            <form>
                <label><b>Email Address</b>
                <input type="email" name="Email" id="emailsignin" required>
                </p>

                <label><b>Password</b>
                <input type="password" name="Password" id="passwordsignin" required>
                </p>

                <label><p>Remember sign in details
                <input type="checkbox" name="Remember" id="remember">
                </p>
                <!-- this won't acutally work, need to add in javascript pretty sure -->

                <input type="submit" name="Signin" id="signin" value="Sign in">
                <!-- need to add in code for submission-->
            </form>
        </div>

        <p class="forgotpassword"><a href="">Forgot your password?</a></p>
        <p class="tos">By continuing, you agree to our Terms of Service and Privacy Notice.</p><br><br><br>
    </div>


    <?php require_once "inc/bottom.inc.php"; ?> 
</body>

</html>