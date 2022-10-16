<!-- contributor: Jessica Richardson rich0485 -->

<?php
    // connect to database
    require 'sessionstart.inc.php';
    include('dbconn.inc.php');

    if (isset($_POST['placeOrder'])) {

        // retrieving form details
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $address = $_POST['address'];
        $state = $_POST['state'];
        $city = $_POST['city'];
        $postalc = $_POST['postalc'];
        $phone = $_POST['phone'];
        $cardnumber = $_POST['cardnumber'];
        $mmyy = $_POST['mmyy'];
        $cvv = $_POST['cvv'];
        $cardname = $_POST['cardname'];

        $cardnumber_hash = password_hash($cardnumber, PASSWORD_BCRYPT);

        $query = $connection->prepare("INSERT INTO cart (firstname, lastname, address, state, city, postalc, phone, cardnumber, mmyy, cvv, cardname) 
            VALUES (:firstname,:lastname,:address,:state,:city,:postalc,:phone,:cardnumber_hash,:mmyy,:cvv,:cardname)");
        $query->bindParam("firstname", $firstname, PDO::PARAM_STR);
        $query->bindParam("lastname", $lastname, PDO::PARAM_STR);
        $query->bindParam("address", $address, PDO::PARAM_STR);
        $query->bindParam("state", $state, PDO::PARAM_STR);
        $query->bindParam("city", $city, PDO::PARAM_STR);
        $query->bindParam("postalc", $postalc, PDO::PARAM_STR);
        $query->bindParam("phone", $phone, PDO::PARAM_STR);
        $query->bindParam("cardnumber_hash", $cardnumber_hash, PDO::PARAM_STR);
        $query->bindParam("mmyy", $mmyy, PDO::PARAM_STR);
        $query->bindParam("cvv", $cvv, PDO::PARAM_STR);
        $query->bindParam("cardname", $cardname, PDO::PARAM_STR);

        $result = $query->execute();
            if ($result) {
                header("Location: ./thankyou.php");
                echo '<div class="success">Your purchase has been processed! You will receive an email shortly verifying this transaction</div>';
            }
            else {
                echo '<div class="error">Something went wrong, try again later.</div>';
            }
        }    
?>