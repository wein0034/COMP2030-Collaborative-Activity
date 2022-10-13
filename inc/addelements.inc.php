<!-- contributor: Tatiana Roa Jaramillo roaj0001 -->
<!-- add products to cart -->
<?php
    // the following lines are commented out as including this after it has already been called makes them complain. See viewitem.php for more info. ~J
    // connect to database
    //session_start();
    //echo '<script> console.log('."ID: ".$itemID.'); </script>';
    //include('dbconn.inc.php');


    // $itemID = htmlspecialchars($_GET["viewInfo"]);
    // $result = $conn->query("SELECT * 
    //                         FROM products 
    //                         WHERE id=$itemID");

    // print id of product
    if (isset($_POST['add'])) {
        print_r($itemID);
    }
?>