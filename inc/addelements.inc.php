<!-- contributor: Julian Weinrich wein0034 -->
<!-- add products to cart -->
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if ($_POST['add'] >= 0)
        {
            $item = $_POST['add'];
            $_SESSION['cart'][] = $item;

            echo '<script> console.log('.$item.');</script>';
            echo '<script> console.log('.count($_SESSION['cart']).');</script>';
            echo '<p> Added to cart! </p>';
            $_POST['add'] = -1;
        }
    }
?>