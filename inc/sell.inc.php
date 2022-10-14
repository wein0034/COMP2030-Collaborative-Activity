<!-- contributor: Jessica Richardson rich0485 -->

<?php
    // connect to database
    require 'sessionstart.inc.php';
    include('dbconn.inc.php');

    if (isset($_POST['publish'])) {

        // retrieving form details
        $title = $_POST['title'];
        $price = $_POST['price'];
        $cond = $_POST['cond'];
        $category = $_POST['category'];
        $location = $_POST['location'];
        $description = $_POST['description'];

        // preparing query to insert values into database
        $query = "INSERT INTO products (title, price, cond, category, location, description, image) VALUES(?,?,?,?,?,?,?)";

        // preparing statement
        $statement = $connection->prepare($query);

        // preparing to save the image into the local folder
        $filename = $_FILES['image']['name']; 
        $target_file = './images/'.$filename;
        $file_extension = pathinfo($target_file, PATHINFO_EXTENSION);
        $file_extension = strtolower($file_extension);

        // checking it is an image with valid extension
        $valid_extension = array("png","jpeg","jpg");

        // checking image size not too large
        if ($_FILES['image']['size'] > 500000) {
            echo 'Sorry, your file is too large.';
            $uploadOk = 0;
          }

        // moving the image to folder and executing the statement to upload all info into database
        if(in_array($file_extension, $valid_extension)) {
            if(move_uploaded_file($_FILES['image']['tmp_name'],$target_file)) { 
                $statement->execute(array($title, $price,$cond,$category,$location,$description,$filename));
            }
        }
        echo '<p class="success">Item listed!</p>'; 
    }
?>