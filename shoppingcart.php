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
    <form action="#" class="form">
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
                    <div class="container">
                        <div class="rowcart">
                            <div class="col-50">
                                <img src="images/tent.jpg" class="scartimage" width=100%>
                            </div>
                            <div class="col-50">
                                <br>

                                <h3 id='productName'>Caravan</h3>
                                <p id='productDescription'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Nulla quam velit, vulputate eu pharetra nec, mattis ac 
                                    neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id.</p>
                                <p id='productPrice'>$30,000<p>
                            </div>
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
                            <p id='right'>$28,000</p>
                            <p id='right'>$1,000</p>
                            <p id='right'>$2,000</p>
                            <p id='right' class="bold">$31,000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <a href="#" class="btn btn-next width-50 ml-auto">Next</a>
            </div>
        </div>

        <!-- Shipping Details -->
        <div class="form-step">
            <div class="rowcart">
                <div class="col-75">
                    <div class="rowinput">
                        <div class="col-50input">
                            <label for="fname"> First Name</label>
                            <input type="text" id="fname" name="firstname" placeholder="David">
                        </div>
                        <div class="col-50input">
                            <label for="lname">Last Name</label>
                            <input type="text" id="lname" name="lastname" placeholder="Smith">
                        </div>
                    </div>
                    <div class="rowinput">
                        <div class="col-100input">
                            <label for="adr">Address</label>
                            <input type="text" id="adr" name="address" placeholder="5 Flinders Street">
                        </div>
                    </div>
                    <div class="rowinput">
                        <div class="col-50input">
                            <label for="state">State</label>
                            <input type="text" id="state" name="state" placeholder="SA">
                        </div>
                        <div class="col-50input">
                            <label for="city">City</label>
                            <input type="text" id="city" name="city" placeholder="Adelaide">
                        </div>
                    </div>
                    <div class="rowinput">
                        <div class="col-50input">
                            <label for="postalc">Postal Code</label>
                            <input type="text" id="postalc" name="postalc" placeholder="5000">
                        </div>
                        <div class="col-50input">
                            <label for="phone">Phone</label>
                            <input type="text" id="phone" name="phone" placeholder="0404000000">
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
                            <p id='right'>$28,000</p>
                            <p id='right'>$1,000</p>
                            <p id='right'>$2,000</p>
                            <p id='right' class="bold">$31,000</p>
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
                            <input type="text" id="ccnum" name="cardnunmber" placeholder="0000 0000 0000 0000">
                        </div>
                    </div>
                    <div class="rowinput">
                        <div class="col-50input">
                            <label for="mmyy">Month/Year</label>
                            <input type="text" id="mmyy" name="mmyy" placeholder="MMYY">
                        </div>
                        <div class="col-50input">
                            <label for="cvv">CVV/Security Code</label>
                            <input type="text" id="cvv" name="cvv" placeholder="302">
                        </div>
                    </div>
                    <div class="rowinput">
                        <div class="col-50input">
                            <label for="cname">Name on Card</label>
                            <input type="text" id="cname" name="cardname" placeholder="David Smith">
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
                            <p id='right'>$28,000</p>
                            <p id='right'>$1,000</p>
                            <p id='right'>$2,000</p>
                            <p id='right' class="bold">$31,000</p>
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
    </form>
    <?php require_once "inc/bottom.inc.php"; ?>
</body>

</html>