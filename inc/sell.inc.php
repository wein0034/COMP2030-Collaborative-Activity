<!-- author: Jessica Richardson rich0485 -->

<?php
    session_start();
    include('dbconn.inc.php');

    if (isset($_POST['publish'])) {

        $title = $_POST['title'];
        $price = $_POST['price'];
        $cond = $_POST['cond'];
        $category = $_POST['category'];
        $location = $_POST['location'];
        $description = $_POST['description'];

        $query = "INSERT INTO products (title, price, cond, category, location, description, image) VALUES(?,?,?,?,?,?,?)";
        $statement = $connection->prepare($query);

        $filename = $_FILES['image']['name']; 
        $target_file = './images/'.$filename;
        $file_extension = pathinfo(
        $target_file, PATHINFO_EXTENSION);
        $file_extension = strtolower($file_extension);
        $valid_extension = array("png","jpeg","jpg");
        if(in_array($file_extension, $valid_extension)) {
            if(move_uploaded_file($_FILES['image']['tmp_name'],$target_file)) { 
                $statement->execute(array($title, $price,$cond,$category,$location,$description,$filename));
            }
        }
        echo '<p class="success">Item listed!</p>'; 
    }

?>