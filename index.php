<!-- contributor: Julian Weinrich wein0034 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>SENIOR -- Shopping and Exchange for Nomads Interested in Outdoor Recreation</title>
    <meta charset="UTF-8">
    <meta name="author" content="rich0485, roaj0001, wein0034">
    <link rel="stylesheet" href="styles/style.css">
</head>

<body class="index">
    <?php require_once "inc/top.inc.php"; ?>
    <?php require_once "inc/search.inc.php"; ?>

    <div id="landingPage">
        <div id="landingPageInner">
            <h1>I'm looking for...</h1>
            <form action="searchresults.php" method="GET" id="indexButtons">
                <button type="submit" class="indexButton" name="searchQuery" value="Vehicles">
                    <img class="buttonImage VehiclesButton" id="Vehicle" src="images/caravan2.jpg">
                    <h2>Vehicles</h2>
                </button>

                <button type="submit" class="indexButton " name="searchQuery" value="Furniture">
                    <img class="buttonImage FurnitureButton" id="Furniture" src="images/campingchairs.jpg">
                    <h2>Furniture</h2>
                </button>

                <button type="submit" class="indexButton " name="searchQuery" value="Supplies">
                    <img class="buttonImage SuppliesButton" id="Supplies" src="images/campingtable.jpg">
                    <h2>Supplies</h21>
                </button>

                <button type="submit" class="indexButton " name="searchQuery" value="Services">
                <div></div>
                    <img class="buttonImage ServicesButton" id="Services" src="images/hiking.jpg">
                    <h2>Services</h2>
                    
                </button>
            </form>


            <div class="indexBar">
                <?php require "inc/search.inc.php"; ?>
            </div>
        </div>
    </div>

    <?php require "inc/bottom.inc.php"; ?>
    
    <?php
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

        function ReplaceCategoryImages($category, $conn)
        {
            $sql = "SELECT * 
                    FROM products 
                    WHERE category = '$category'";
                
            $result = $conn->query($sql);

            if ($result->num_rows > 0)
            {
                $rand = rand(1, $result->num_rows);

                $i = 1;
                while($row = $result->fetch_assoc()) 
                {
                    if ($row['category'] == $category)
                    {
                        if ($i == $rand) 
                        {
                            if ($row['image'] != null)
                            {
                                echo '<script>SetField(("'.$category.'Button"), "src", "images/'.$row["image"].'", 0, -1);</script>';
                            }
                            break;
                        }
                        $i++;
                    }
                }
            }
        }

        ReplaceCategoryImages("Vehicles", $conn);
        ReplaceCategoryImages("Furniture", $conn);
        ReplaceCategoryImages("Supplies", $conn);
        ReplaceCategoryImages("Services", $conn);
    ?>
</body>

</html>