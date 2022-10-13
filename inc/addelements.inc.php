<!-- add products to cart -->
<?php
    // connect to database
    session_start();
    echo '<script> console.log('."ID: ".$itemID.'); </script>';
    include('dbconn.inc.php');

    // $itemID = htmlspecialchars($_GET["viewInfo"]);
    // $result = $conn->query("SELECT * 
    //                         FROM products 
    //                         WHERE id=$itemID");

    // print id of product
    if (isset($_POST['add'])) {
        print_r($itemID);
    }
?>