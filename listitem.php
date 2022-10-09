<!-- contributor: Jessica Richardson rich0485 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>SENIOR -- List an item for sale</title>
    <meta charset="UTF-8">
    <meta name="author" content="rich0485, roaj0001, wein0034">
    <script src="scripts/imagepreview.js" defer></script>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body class="listitem-background">
    <?php require_once "inc/top.inc.php"; ?> 
    <?php require_once "inc/sell.inc.php"; ?>
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
                    <input type="file" name="image" id="image-input" accept="image/jpeg, image/png, image/jpg" required>
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