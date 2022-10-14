<!-- contributor: Tatiana Roa Jaramillo roaj0001 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>SENIOR -- Account page</title>
    <meta charset="UTF-8">
    <meta name="author" content="rich0485, roaj0001, wein0034">
    <link rel="stylesheet" href="styles/style.css">
</head>

<body class="accountbody">
    <?php require_once "inc/top.inc.php"; ?> 
    <?php require_once "inc/search.inc.php"; ?>

    <div class="account">
        <div id="content-wrap">
        <p>
            <?php
                require 'inc/sessionstart.inc.php';

                if (isset($_SESSION['username']))
                {
                    echo '<h1>Welcome to your account, '.$_SESSION['username'].'</h1>';
                }
                else
                {
                    echo '<h1>Account</h1>';
                }
            ?>
        <p>
            <div class="row1">
                <div class="leftHalf">
                    <a href="yourads.html" class="acc-links"><h2> Your Ads </h2></a>
                    <h3 id='productName'>Caravan</h3>
                    <p id='productPrice'>$30,000<p>
                    <p id='productDescription'> 
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. 
                        Duis vulputate commodo lectus, ac blandit elit tincidunt id.
                    </p>
                    <div class="accImgHolder">
                        <img src="images/caravan.jpg" class="accImgs">
                    </div>
                </div>

                
                <div class="rightHalf">
                    <a href="yourorders.html" class="acc-links"><h2> Your Orders </h2></a>
                    <h3 id="productName">Tent</h3>
                    <p id='productPrice'>$150<p>
                    <p id='productDescription'> 
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. 
                        Duis vulputate commodo lectus, ac blandit elit tincidunt id.
                    </p>
                    <div class="accImgHolder"> 
                        <img src="images/tent.jpg" class="accImgs">
                    </div>
                </div>
            </div>
                
            <div class="row2">
                <div class="leftHalfR2">
                <h2 id='row2Tittle'> <a href="favourites.html" class="acc-links">Favourites </h2></a>
                    <img src="images/favourite.png" class="favouriteIcon">
                </div>
                
                <div class="rightHalfR2">
                    <h2 id='row2Tittle'><a href="settings.html" class="acc-links">Settings </h2></a>
                    <img src="images/setting.png" class="settingIcon">
                </div>
            </div>
        </div>
    </div>

    <?php require_once "inc/bottom.inc.php"; ?>
</body>

</html>