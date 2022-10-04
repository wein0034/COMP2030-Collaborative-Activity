<?php
    session_start();
    include('inc/dbconn.inc.php');

    if (isset($_POST['publish'])) {
        $title = $_POST['title'];
        $price = $_POST['price'];
        $cond = $_POST['cond'];
        $category = $_POST['category'];
        $location = $_POST['location'];
        $description = $_POST['description'];
        $image = $_POST['image'];

        $query = $connection->prepare("SELECT * FROM products WHERE title=:title");
        $query->bindParam("title", $title, PDO::PARAM_STR);
        $query->execute();
        if ($query->rowCount() == 0) {
            $query = $connection->prepare("INSERT INTO products(title, price, cond, category, location, description, image) 
                VALUES (:title,:price,:cond,:category,:location,:description,:image)");
            $query->bindParam("title", $title, PDO::PARAM_STR);
            $query->bindParam("price", $price, PDO::PARAM_STR);
            $query->bindParam("cond", $cond, PDO::PARAM_STR);
            $query->bindParam("category", $category, PDO::PARAM_STR);
            $query->bindParam("location", $location, PDO::PARAM_STR);
            $query->bindParam("description", $description, PDO::PARAM_STR);
            $query->bindParam("image", $image, PDO::PARAM_STR);

            $result = $query->execute();
            if ($result) {
                echo '<p class="success">Item listed!</p>'; 
                // go to the item listing page
            } else {
                echo '<p class="error">Something went wrong, try again later.</p>';
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>List an item for sale</title>
    <meta charset="UTF-8">
    <meta name="author" content="rich0485, roaj0001, wein0034">
    <script src="imagepreview.js" defer></script>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body class="listitem-background">
    <?php require_once "inc/top.inc.php"; ?> 
    <?php require_once "inc/search.inc.php"; ?>

    <div class="forsale">
        <h1>List item for sale</h1>
    </div>

    <div class="item">
        <div class="column">
        <form action="" method="POST">
            <label><b>Title</b></label><br>
            <input type="text" name="title" id="title" required><p></p>

            <div class="sellpricecondition">
                <div id="sellprice">
                    <label><b>Price ($)</b></label><br>
                    <input type="text"  name="price" id="price" min=0.05 type="number" required>
                </div>
                <div id="sellcondition">
                    <label><b>Condition</b></label><br>
                    <input type="radio" name="cond" id="new" value="New">
                    <label for="new">New</label>
                    <input type="radio" name="cond" id="used" value="Used">
                    <label for="used">Used</label>
                    <p></p>
                </div>
            </div>

           <label for="category"><b>Category</b><br>
            <select name="category" id="category" required>
                <option value="" selected>Select Option</option>
                <option value="vehicle">Vehicle</option>
                <option value="furniture">Furniture</option>
                <option value="supplies">Supplies</option>
                <option value="services">Services</option>
            </select>
        <p>

            <label><b>Location</b></label><br>
            <input type="text" id="location" name="location" required><p></p>

            <label><b>Description</b></label><br>
            <textarea name="description" id="description" data-val-length-min="20" 
                data-val-required = "Please enter a description." required></textarea>

        </div>

        <div class="column">
            <div class="rightcolumn"> 
                <div class="form-input">
                    <label for="image-input">Upload Image</label><p>
                    <input type="file" name="image" id="image-input" accept="image/jpeg, image/png, image/jpg">
                    <div id="display-image">
                    </div>
                </div>
            </div>
            <div class="buttonHolder">
                <p><input type="submit" id="publish" name="publish" value="Publish"></p>
            </div>
        </div>
    </form>
    </div>
</div>

    <?php require_once "inc/bottom.inc.php"; ?>
</body>
</html>