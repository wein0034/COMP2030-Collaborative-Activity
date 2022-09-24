<!DOCTYPE html>
<html lang="en">

<head>
    <title>List an item for sale</title>
    <meta charset="UTF-8">
    <meta name="author" content="rich0485, roaj0001, wein0034">
    <script src="scripts/script.js" defer></script>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <?php require_once "inc/top.inc.php"; ?> 
    <?php require_once "inc/search.inc.php"; ?>

    <div class="listitem">
        <div class="column">

        <h1>Item for sale</h1><br>
        <form>
            <label><b>Title</b></label><br>
            <input type="text" id="title" required><p></p>

            <div class="sellpricecondition">
                <div id="sellprice">
                    <label><b>Price</b></label><br>
                    <input type="text" id="price" min=0.05 type="number" required value="$">
                </div>
                <div id="sellcondition">
                    <label><b>Condition</b></label><br>
                    <input type="radio" name="condition" id="new" value="New">
                    <label for="new">New</label>
                    <input type="radio" name="condition" id="used" value="Used">
                    <label for="used">Used</label>
                    <p></p>
                </div>
            </div>
        
            <label for="category"><b>Category</b></label><br>
            <select name="category" id="category" required>
                <option value="vehicle">Select Option</option>
                <option value="vehicle">Vehicle</option>
                <option value="furniture">Furniture</option>
                <option value="supplies">Supplies</option>
                <option value="services">Services</option>
        </select>
        <p><p>

            <label><b>Location</b></label><br>
            <input type="text" id="location" required><p></p>

            <label><b>Description</b></label><br>
            <textarea name="Description" id="description" data-val-length-min="20" 
                data-val-required = "Please enter a description." required></textarea><p></p>

        </div>

        <div class="column">
            <div class="rightcolumn">        
            <img src="images/addphoto.png" width=300px><br>
            <img src="images/addphoto.png" width=100px>
            <img src="images/addphoto.png" width=100px>
            <img src="images/addphoto.png" width=100px>
            <p><input type="submit" id="savedraft" value="Save Draft"></p>
            <p><input type="submit" id="publish" value="Publish"></p>
            </div>
        </div>

    </div>



    <?php require_once "inc/bottom.inc.php"; ?>
</body>


</html>