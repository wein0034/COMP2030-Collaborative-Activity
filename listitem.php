<!DOCTYPE html>
<html lang="en">

<head>
    <title>List an item for sale</title>
    <meta charset="UTF-8">
    <meta name="author" content="rich0485, roaj0001, wein0034">
    <script src="scripts/script.js" defer></script>
    <script src="scripts/imagepreview.js" defer></script>
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
            <input type="text" id="location" required><p></p>

            <label><b>Description</b></label><br>
            <textarea name="Description" id="description" data-val-length-min="20" 
                data-val-required = "Please enter a description." required></textarea>

        </div>

        <div class="column">
            <div class="rightcolumn"> 

                <div class="image-upload">
                    <label for="file-input">
                        <img src="images/uploadpic.png" id="addphoto-lrg">
                    </label>
                <input id="file-input" type="file" accept="image/jpeg, image/png, image/jpg"><br>

                <label for="file-input2">
                        <img src="images/uploadpic.png" id="addphoto-sml">
                    </label>
                <input id="file-input2" type="file" accept="image/jpeg, image/png, image/jpg">

                <label for="file-input3">
                        <img src="images/uploadpic.png" id="addphoto-sml">
                    </label>
                <input id="file-input3" type="file" accept="image/jpeg, image/png, image/jpg">

                <label for="file-input4">
                        <img src="images/uploadpic.png" id="addphoto-sml">
                    </label>
                <input id="file-input4" type="file" accept="image/jpeg, image/png, image/jpg">
                </div>

                <p><input type="submit" id="publish" value="Publish"></p>
                    <!--  https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/file-->
                    <!-- can maybe add in the above javascript under 'examples' towards the end of the page to give preview of image -->
                
                    </div>
            </form>
        </div>
    </div>



    <?php require_once "inc/bottom.inc.php"; ?>
</body>


</html>