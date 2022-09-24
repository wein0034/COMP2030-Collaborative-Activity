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

            <label><b>Price</b></label><br>
            <input type="text" id="price" min=0.05 type="number" required value="$"><p></p>

            <label><b>Category</b></label><br>
            <input type="text" id="category" required><p></p>

            <label><b>Condition</b></label>
            <input type="radio" name="condition" id="new" value="New">
            <label for="new">New</label>
            <input type="radio" name="condition" id="used" value="Used">
            <label for="used">Used</label>
            <p></p>

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