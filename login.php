<!DOCTYPE html>
<html lang="en">

<head>
    <title>Landing Page</title>
    <meta charset="UTF-8">
    <meta name="author" content="rich0485, roaj0001, wein0034">
    <script src="scripts/script.js" defer></script>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <?php require_once "inc/top.inc.php"; ?> 
    <?php require_once "inc/search.inc.php"; ?>

    <div class="outerlogin">
        <img id="tent" src="images/tent.jpg">

        <div class="createaccount">
            <form>
                <p>New user? <b>Click here to create an account!</b></p>

                <label><b>Name</b></br>
                <input type="text" name="Name" id="name" required>
                </p>

                <label><b>Email Address</b><br>
                <input type="email" name="Email" id="email" required>
                </p>

                <label><b>Password</b><br>
                <input type="password" name="Password" id="password" required>
                </p>

                <label><b>Confirm Password</b><br>
                <input type="password" name="Password" id="password" required>
                </p>

                <input type="submit" name="CreateAccount" id="createaccount" value="Create Account">
            </form>
        </div>

        <div class="signin">
            <form>
                <p>Returning user? <b>Sign in here!</b></p>

                <label><b>Email Address</b></br>
                <input type="email" name="Email" id="emailsignin" required>
                </p>

                <label><b>Password</b><br>
                <input type="password" name="Password" id="passwordsignin" required>
                </p>

                <label><p>Remember sign in details
                <input type="checkbox" name="Remember" id="remember">
                </p>

                <input type="submit" name="Signin" id="signin" value="Sign in">
            </form>
        </div>
    <p class="tos">By continuing, you agree to our Terms of Service and Privacy Notice.</p>
    </div>





    <?php require_once "inc/bottom.inc.php"; ?> 
</body>

</html>