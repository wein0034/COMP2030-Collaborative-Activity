<!DOCTYPE html>
<html lang="en">

<head>
    <title>SENIOR - Shopping and Exchange for Nomads Interested in Outdoor Recreation</title>
    <meta charset="UTF-8">
    <meta name="author" content="rich0485, roaj0001, wein0034">
    
    <script src="scripts/helperfunctions.js" defer></script>
    <script src="scripts/collapsiblemenu.js" defer></script>
    <script src="scripts/searchresults.js" defer></script>

    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <?php require_once "inc/top.inc.php"; ?> 

    <p id="resultsCounter">test</p>

    <?php
        session_start();
        require_once "inc/dbconn.inc.php";
        // this includes the searchresults.js script. why it has to be here as well as at the top i have no idea but i don't like it
        echo '<script src="scripts/searchresults.js"></script>';
        
        $servername = "localhost";
        $username = "root";
        $password = "mysql";
        $dbname = "senior";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);
            echo '<script>CounterDisplay("Connection to database failed.");</script>';
        }
        else
        { 
        }

        $sql = "SELECT * 
                FROM products";
                
        $result = $conn->query($sql);

        if ($result->num_rows > 0) 
        {
            $resultCount = 0;
            
            // sanitise and standardise capitals in searchQuery$searchQuery
            $searchQuery = strtolower(htmlspecialchars($_GET["searchQuery"]));
            if ($searchQuery == "")
            {
                $searchQuery = "*";
            }

            // output data of each row
            while($row = $result->fetch_assoc()) 
            {
                // only show results whose title, condition or category match the search query
                // unless search query is empty, in which case show everything.
                if (($searchQuery == "*") ||
                    (strpos(strtolower($row["title"]), $searchQuery)) ||
                    (strtolower($row["cond"]) == $searchQuery) ||
                    (strtolower($row["category"]) == $searchQuery))
                {
                    $resultCount += 1;    

                    // Add a copy of the item template to the page
                    include "inc/searchitem.inc.php";

                    // echo '<img src="'.$row["image"].'" >';  



                    echo '<script>SetField("itemName","'.ucwords($row["title"]).'");</script>';
                    // change the values to match the result
                    echo '<script>SetField("srPrice","$"+"'.number_format($row["price"], 2).'");</script>';
                    // echo '<script>SetField("itemName","'.$row["cond"].'");</script>';
                    echo '<script>SetField("category","'.ucwords($row["category"]).'");</script>';
                    // echo '<script>SetField("itemName","'.$row["location"].'");</script>';
                    echo '<script>SetField("contentText",`'.trim($row["description"]).'`);</script>';
                    
                }
            }

            // Display resultCount to user
            if ($resultCount < 1)
            {
                echo '<script>CounterDisplay("Sorry, there were no results that matched your search.");</script>';
            }
            else
            {
                if ($resultCount == 1)
                {
                    echo '<script>CounterDisplay(('.$resultCount.' + " result!"));</script>';
                }
                else
                {
                    echo '<script>CounterDisplay(('.$resultCount.' + " results!"));</script>';
                }
            }
        } 
        else 
        {
            echo "0 results";
            echo '<script>CounterDisplay("Sorry, the database does not contain any items.");</script>';
        }

        $conn->close();
    ?>
    
    <?php require_once "inc/search.inc.php"; ?>
    <?php require_once "inc/bottom.inc.php"; ?>
</body>

</html>