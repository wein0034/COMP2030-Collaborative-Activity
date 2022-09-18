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

        <p><h1>Item for sale</h1><p>
        <form>
            <p><input type="text" id="title" value="Title" required></p>
            <p><input type="text" id="price" min=0.05 type="number" required></p>
            <p><input type="text" id="category" value="Category" required></p>
            <p><input type="text" id="condition" value="Condition" required></p>
            <p><input type="text" id="location" value="Location" required></p>
            <p><textarea name="Description" id="description" rows="5" required>Description</textarea></p>

        </div>

        <div class="column">
            <div class="rightcolumn">        
            <img src="images/addphoto.png" width=300px><br>
            <img src="images/addphoto.png" width=100px>
            <img src="images/addphoto.png" width=100px>
            <img src="images/addphoto.png" width=100px>
            <input type="submit" id="savedraft" value="Save Draft">
            <input type="submit" id="publish" value="Publish">
            </div>
        </div>

    </div>



    <?php require_once "inc/bottom.inc.php"; ?>
</body>


</html>