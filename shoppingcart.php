<!-- contributor: Tatiana Roa Jaramillo roaj0001, Julian Weinrich wein0034, Jessica Richardson rich0485 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Shopping Cart</title>
    <meta charset="UTF-8">
    <meta name="author" content="rich0485, roaj0001, wein0034">
    <script src="scripts/shoppingcart.js" defer></script>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body class="shoppingcart">
    <?php require_once "inc/top.inc.php"; ?> 
    <?php require_once "inc/search.inc.php"; ?>

    <form method="POST" id="clearcart">
        <?php
        if (isset($_POST['clearcart'])){
            if ($_SERVER["REQUEST_METHOD"] == "POST")
            {
                if ($_POST['clearcart'] > 0)
                {
                    $_SESSION['cart'] = array();
                    $_POST['clearcart'] = -1;
                    header( "Location: index.php" );
                }
            }
        }
        ?>
    </form>

    <?php require_once "inc/cartdetails.inc.php"; ?>

    <div class="form shoppingcartcontent">
        <!-- <h1 class="text-center">Registration Form</h1> -->
        <!-- Progress bar -->
        <div class="progressbar">
            <div class="progress" id="progress"></div>

            <div class="progress-step progress-step-active" data-title="Shopping Cart"></div>
            <div class="progress-step" data-title="Shipping Details"></div>
            <div class="progress-step" data-title="Payment Options"></div>
        </div>

        <!-- Steps -->
        <!-- Shopping Cart -->
        <div class="form-step form-step-active">
            <div class="rowcart">
                <div class="col-75">
                    <div id="cart items">
                        <?php
                            // function use to display the price breakdown
                            $total = 0;
                            function DisplayPrice()
                            {
                                global $total;
                                echo '<p id="right">$'.number_format($total, 2).'</p>';
                                echo '<p id="right">$'.number_format($total * 0.05, 2).'</p>';
                                echo '<p id="right">$'.number_format($total * 0.1, 2).'</p>';
                                echo '<p id="right" class="bold">$'.number_format($total * 1.15, 2).'</p>';
                            }

                            // display the items in the cart
                            if (count($_SESSION['cart']) > 0)
                            {
                                require 'inc/sessionstart.inc.php';
                                echo '<script src="scripts/helperfunctions.js"></script>';

                                // Create connection
                                $conn = mysqli_connect("localhost", "root", "mysql", "senior");
                                // Check connection
                                if ($conn->connect_error) 
                                {
                                    echo '<script>CounterDisplay("Connection to database failed.");</script>';
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                $sql = "SELECT * 
                                        FROM products";
                                        
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) 
                                {
                                    $done = array();

                                    foreach ($_SESSION['cart'] as $id)
                                    {
                                        // skip the item if it has already been done
                                        $skip = false;
                                        foreach ($done as $item)
                                        {
                                            if ($item == $id)
                                            {
                                                $skip = true;
                                                break;
                                            }
                                        }
                                        if ($skip)
                                        {
                                            continue;
                                        }

                                        // count how many of the item are in the cart
                                        $num = 0;
                                        foreach ($_SESSION['cart'] as $item)
                                        {
                                            if ($item == $id)
                                            {
                                                $num++;
                                            }
                                        }

                                        // add the item to the "done" array
                                        $done[] = $id;

                                        // load the item on screen and set its values
                                        $sql = "SELECT * 
                                                FROM products
                                                WHERE id = $id";
                                        
                                        $result = $conn->query($sql);
                                        while($row = $result->fetch_assoc()) 
                                        {
                                            if ($row["id"] == $id)
                                            {
                                                include "inc/cartitem.inc.php";
                                                echo '<script>SetField("ciImg",   "src",       "images/'.$row["image"].'",   -1, -1);</script>';
                                                echo '<script>SetField("ciTitle", "innerText", "'.ucwords($row["title"]).'", -1, -1);</script>';
                                                echo '<script>SetField("ciQuant", "innerText", "Amount: " + "'.$num.'",      -1, -1);</script>';
                                                echo '<script>SetField("ciPrice", "innerText", "$" + "'.number_format($row["price"] * $num, 2).'", -1, -1);</script>';
                                                echo '<script>SetField("srInner", "value",`'.$row["id"].'`);</script>';

                                                $total += $row["price"] * $num;
                                            }
                                        }
                                    }
                                }
                            }
                            else
                            {
                                echo '<h3 class="cartemptymessage"><a href="index.php">Nothing in cart, why not add something?</a></h3>';
                            }
                        ?> 
                    </div>
                </div>
                <!-- Summary -->
                <div class="col-25">
                    <div class="summarycontainer">
                        <br>
                        <p id="summary">Summary</p>
                        <hr>
                        <div class="rowcart">
                            <div class="col-50">
                                <p id='left'>Subtotal</p>
                                <p id='left'>Shipping</p>
                                <p id='left'>Taxes</p>
                                <p id='left' class="bold">TOTAL</p>
                            </div>
                            <div class="col-50 right">
                                <?php DisplayPrice() ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shopcartbttns">
                <?php
                    if (count($_SESSION['cart']) > 0)
                    {
                        echo '<button type="submit" name="clearcart" class="btn btn-next width-50 ml-auto" value=1 form="clearcart">Clear Cart</button>';
                        echo '<a href="#" class="btn btn-next width-50 ml-auto">Next</a>';
                    }
                ?>
            </div>
        </div>

        <!-- Shipping Details -->
        <form action="" method="POST">
            <div class="form-step">
                <div class="rowcart">
                    <div class="col-75">
                        <div class="rowinput">
                            <div class="col-50input">
                                <label for="fname"> First Name</label>
                                <input type="text" id="fname" name="firstname" placeholder="David" required>
                            </div>
                            <div class="col-50input">
                                <label for="lname">Last Name</label>
                                <input type="text" id="lname" name="lastname" placeholder="Smith" required>
                            </div>
                        </div>
                        <div class="rowinput">
                            <div class="col-100input">
                                <label for="adr">Address</label>
                                <input type="text" id="adr" name="address" placeholder="5 Flinders Street" required>
                            </div>
                        </div>
                        <div class="rowinput">
                            <div class="col-50input">
                                <label for="state">State</label>
                                <input type="text" id="state" name="state" placeholder="SA" required>
                            </div>
                            <div class="col-50input">
                                <label for="city">City</label>
                                <input type="text" id="city" name="city" placeholder="Adelaide" required>
                            </div>
                        </div>
                        <div class="rowinput">
                            <div class="col-50input">
                                <label for="postalc">Postal Code</label>
                                <input type="text" id="postalc" name="postalc" placeholder="5000" maxlength="4" required>
                            </div>
                            <div class="col-50input">
                                <label for="phone">Phone</label>
                                <input type="text" id="phone" name="phone" placeholder="0404000000" maxlength="10" required>
                            </div>
                        </div>
                    </div>
                    <!-- Summary -->
                    <div class="col-25">
                        <div class="summarycontainer">
                            <br>
                            <p id="summary">Summary</p>
                            <hr>
                            <div class="rowcart">
                                <div class="col-50">
                                <p id='left'>Subtotal</p>
                                <p id='left'>Shipping</p>
                                <p id='left'>Taxes</p>
                                <p id='left' class="bold">TOTAL</p>
                                </div>
                                <div class="col-50 right">
                                    <?php DisplayPrice() ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btns-group">
                    <a href="#" class="btn btn-prev">Previous</a>
                    <a href="#" class="btn btn-next">Next</a>
                </div>
            </div>
        <!-- Payment Options -->
        <div class="form-step">
            <div class="rowcart">
                <div class="col-75">
                    <div class="rowinput">
                        <div class="col-100input">
                            <label for="ccnum">Credit card number</label>
                            <input type="text" id="ccnum" name="cardnumber" placeholder="0000 0000 0000 0000" maxlength="16" required>
                        </div>
                    </div>
                    <div class="rowinput">
                        <div class="col-50input">
                            <label for="mmyy">Month/Year</label>
                            <input type="text" id="mmyy" name="mmyy" placeholder="MMYY" maxlength="4" required>
                        </div>
                        <div class="col-50input">
                            <label for="cvv">CVV/Security Code</label>
                            <input type="text" id="cvv" name="cvv" placeholder="302" maxlength="3" required>
                        </div>
                    </div>
                    <div class="rowinput">
                        <div class="col-50input">
                            <label for="cname">Name on Card</label>
                            <input type="text" id="cname" name="cardname" placeholder="David Smith" required>
                        </div>
                    </div>

                    
                </div>
                <!-- Summary -->
                <div class="col-25">
                    <div class="summarycontainer">
                        <br>
                        <p id="summary">Summary</p>
                        <hr>
                        <div class="rowcart">
                            <div class="col-50">
                            <p id='left'>Subtotal</p>
                            <p id='left'>Shipping</p>
                            <p id='left'>Taxes</p>
                            <p id='left' class="bold">TOTAL</p>
                            </div>
                            <div class="col-50 right">
                                <?php DisplayPrice() ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="btns-group">
                <a href="#" class="btn btn-prev">Previous</a>
                <input type="submit" class="btn btn-next" id="placeOrder" name="placeOrder" value="Place Order"></a>
            </form>  
                       
            </div>
        </div>
        </div>
    <?php require_once "inc/bottom.inc.php"; ?>
</body>

</html>