<!DOCTYPE html>
<html lang="en">

<head>
    <title>Account page</title>
    <meta charset="UTF-8">
    <meta name="author" content="rich0485, roaj0001, wein0034">
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <?php require_once "inc/top.inc.php"; ?> 
    <?php require_once "inc/search.inc.php"; ?>

    <div class="account">
        <p><h1>Account</h1><p>
        <div class="row1">
            <div class="leftHalf">
                <h2> Your Ads </h2>
                <h3 id='productName'>Caravan</h3>
                <p id='productPrice'>$30,000<p>
                <p id='productDescription'> Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. 
                    Duis vulputate commodo lectus, ac blandit elit tincidunt id.</p>
                <img src="images/caravan.jpg" class="" width=100%>

            </div>
            
            <div class="rightHalf">
                <h2> Your Orders </h2>
                <h3 id='productName'>Tent<h3>
                <img src="images/tent.jpg" class="" width=100%>

            </div>

        </div>
            
        <div class="row2">
            <div class="leftHalfR2">
                <h2 id='row2Tittle'> Favourites </h2>
                <img src="images/favourite.png" class="favouriteIcon">
            </div>
            
            <div class="rightHalfR2">
                <h2 id='row2Tittle'> Settings </h2>
                <img src="images/setting.png" class="settingIcon">
            </div>

        </div>
    </div>


    <?php require_once "inc/bottom.inc.php"; ?> 
</body>

</html>