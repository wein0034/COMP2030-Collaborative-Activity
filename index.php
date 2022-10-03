<!DOCTYPE html>
<html lang="en">

<head>
    <title>SENIOR - Shopping and Exchange for Nomads Interested in Outdoor Recreation</title>
    <meta charset="UTF-8">
    <meta name="author" content="rich0485, roaj0001, wein0034">
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <?php require_once "inc/top.inc.php"; ?> 
    <?php require_once "inc/search.inc.php"; ?>
    
    <div id="landingPage">
        <h1>I'm looking for...</h1>
        <div id="indexButtons">
            
            <form action="searchresults.php" method="GET">
                <button type="submit"  class="indexButton" name="searchQuery" value="Vehicles">
                    <img class="buttonImage" id="Vehicles" src="images/addphoto.png">
                    <h2>Vehicles</h2>
                </button>

                <button type="submit"  class="indexButton" name="searchQuery" value="Furniture">
                    <img class="buttonImage" id="Furniture" src="images/addphoto.png">
                    <h2>Furniture</h2>
                </button>

                <button type="submit"  class="indexButton" name="searchQuery" value="Supplies">
                    <img class="buttonImage" id="Supplies" src="images/addphoto.png">
                    <h2>Supplies</h21>
                </button>

                <button type="submit"  class="indexButton" name="searchQuery" value="Services">
                    <img class="buttonImage" id="Services" src="images/addphoto.png">
                    <h2>Services</h2>
                </button>
            </form>
        </div>

        <div id="searchBar">
            <?php require "inc/search.inc.php"; ?>
        </div>
    </div>

    <?php require "inc/bottom.inc.php"; ?>
</body>


</html>