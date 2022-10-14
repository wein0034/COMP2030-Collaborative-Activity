<!-- contributor: Tatiana Roa Jaramillo roaj0001, Julian Weinrich wein0034 -->

<nav class="topbar">
    <div class="leftheader">
        <a href="./index.php">Buy</a>
        <a href="./listitem.php">Sell</a>
    </div>
    
    <?php require_once "inc/logo.inc.php"; ?> 
    <?php require "inc/search.inc.php"; ?>

    <div class="rightheader">
        <?php
            require 'sessionstart.inc.php';

            if (isset($_SESSION['username']))
            {
                echo '<a href="./account.php">Account</a>';
            }
            else
            {
                echo '<a href="./login.php?returning=false">Sign up</a>';
                echo '<a href="./login.php?returning=true">Log in</a>';
            }
        ?>
        <!-- <a href="./account.php">Account</a> 

        <a href="./login.php?returning=false">Sign up</a>
        <a href="./login.php?returning=true">Log in</a> -->
        <a href="./shoppingcart.php">
            <img src="images/shopping-cart.png" id="shopping-cart">
            <?php
                if (isset($_SESSION['cart']))
                {
                    
                }
                else
                {
                    $_SESSION['cart'] = array();
                }
            ?>
            <span id="cart_count">
                <?php 
                    echo count($_SESSION['cart']);
                ?>
            </span> 
        </a>
    </div>
</nav>