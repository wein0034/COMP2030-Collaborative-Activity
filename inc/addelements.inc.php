<!-- contributor: Tatiana Roa Jaramillo roaj0001 -->
<!-- add products to cart -->
<?php
    // the following lines are commented out as including this after it has already been called makes them complain. See viewitem.php for more info. ~J
    // connect to database
    //require 'sessionstart.inc.php';
    //echo '<script> console.log('."ID: ".$itemID.'); </script>';
    //include('dbconn.inc.php');


    // $itemID = htmlspecialchars($_GET["viewInfo"]);
    // $result = $conn->query("SELECT * 
    //                         FROM products 
    //                         WHERE id=$itemID");

    // print id of product
    if (isset($_POST['add'])) {
        // print_r($itemID);
        if(isset($_SESSION['cart'])){
            $item_array_id = array_column($_SESSION['cart'], $itemID);

            if(in_array($_POST[$itemID], $item_array_id)){
                echo "<script>alert('Product is already added in the cart!')</script>";
                echo "<script>window.location = 'viewitem.php'</script>";
            }else{
                $count = count($_SESSION['cart']);
                $item_array = array(
                    $itemID => $_POST[$itemID]
                );

                $_SESSION['cart'][$count] = $item_array;
                print_r($_SESSION['cart']);
            }
        }else{
            $item_array = array(
                $itemID => $_POST[$itemID]
            );
        }
    }
?>