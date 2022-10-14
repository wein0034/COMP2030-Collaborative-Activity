<!-- contributor: Julian Weinrich wein0034 -->
<form method="POST" >
    <div class="buttonHolder">
        <?php
            require 'sessionstart.inc.php';
            echo '<button type="submit" class="addtocart" tag="addtocart" id="addToCart" name="add" value="">Add to cart</button>';
            require_once 'addelements.inc.php';
        ?>
    </div>
</form>
