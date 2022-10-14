<!-- contributor: Julian Weinrich wein0034 -->
<!-- add products to cart -->
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if ($_POST['add'] >= 0)
        {
            $item = $_POST['add'];
            $_SESSION['cart'][] = $item;
            $_POST['add'] = -1;
        }
    }
?>