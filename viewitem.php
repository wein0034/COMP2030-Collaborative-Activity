<!-- contributor: Jessica Richardson rich0485, Julian Weinrich wein0034 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>SENIOR -- View Item</title>
    <meta charset="UTF-8">
    <meta name="author" content="rich0485, roaj0001, wein0034">
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <?php require_once "inc/top.inc.php"; ?>
    <!-- add elements to cart -->
    <?php require_once "inc/search.inc.php"; ?>

    <div class="empty">
        <div class="item">
            <div class="column" id="view-leftcol">
                <div class="view-imgs">
                    <img id="viewimg-lrg" src="" alt="Item Preview"><br>
                </div>
                <div class="condition">
                    <b id="inline">Condition: </b>
                    <p id="inline">New</p>
                </div>
                <div class="location">
                    <b id="inline">Location: </b>
                    <p id="inline">Adelaide SA</p>
                </div>
            </div>


            <div class="column" id="view-rightcol">
                <div class="view-leftdiv">
                    <h1>Title</h1>
                </div>
                <div class="view-rightdiv">
                    <h1>$00.00</h1>
                </div>
                <hr class="hr-view">
                <div class="view-leftdiv">
                    <h3>Category</h3>
                </div>
                <div class="view-rightdiv">
                    <a href="favourite.html" class="acc-links">
                        <h3>Favourite</h3>
                    </a>
                </div>
                <br>
                <div class="description">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sagittis metus eu dignissim
                        efficitur.
                        Maecenas vestibulum mauris sit amet risus mattis fermentum. Pellentesque vehicula sapien nec
                        lacus pulvinar commodo.
                        Ut eget tortor in risus elementum posuere sit amet id sapien.
                        Nulla lobortis nibh non orci egestas gravida. Fusce sagittis a purus sit amet interdum.
                        Quisque malesuada pharetra eros eget maximus. Donec eget mattis mauris. Ut luctus magna velit,
                        eu viverra leo interdum sit amet.
                    </p>
                </div>
                <form method="POST">
                    <!-- <form action="shoppingcart.php" method="GET"> -->
                    <div class="buttonHolder">
                        <p>
                            <br>
                            <?php require 'inc/addtocart.inc.php'; ?>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php require_once "inc/bottom.inc.php"; ?>
</body>
</html>

<?php
    $conn = mysqli_connect("localhost", "root", "mysql", "senior");

    $itemID = htmlspecialchars($_GET["viewInfo"]);
    $result = $conn->query("SELECT * 
                            FROM products 
                            WHERE id=$itemID");

    if ($result->num_rows > 0) 
    {
        $row = $result->fetch_assoc();
        
        echo '<script src="scripts/helperfunctions.js"></script>';
        
        //searchresults method|  |    field    |  |attribute|     |               content                   |instance|child|
        echo '<script>SetField( "view-leftdiv",  "innerText",    "'.ucwords($row["title"]).'",                  0           );</script>';
        echo '<script>SetField( "view-leftdiv",  "innerText",    "'.ucwords($row["category"]).'",               1           );</script>';
        echo '<script>SetField( "view-rightdiv", "innerText",    "$"+"'.number_format($row["price"], 2).'",     0           );</script>';
        echo '<script>SetField( "location",      "innerText",    "'.$row["location"].'",                       -1,     1    );</script>';
        echo '<script>SetField( "condition",     "innerText",    "'.$row["cond"].'",                           -1,     1    );</script>';
        echo '<script>SetField( "description",   "innerText",    `'.trim($row["description"]).'`                            );</script>';
        echo '<script>SetField( "view-imgs",     "src",          "images/'.$row["image"].'"                                 );</script>';

        echo '<script>SetField( "addtocart",     "value",        "'.$row["id"].'",                             -1,    -1    );</script>';
    } 
?>