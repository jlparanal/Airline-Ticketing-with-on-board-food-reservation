<?php
require_once ('db.php');
// Here the user id is harcoded.
// You can integrate your authentication code here to get the logged in user id
session_start();
$userId = $_SESSION['user'];

if (isset($_POST["index"], $_POST["food_id"])) {
    
    $foodId = $_POST["food_id"];
    $rating = $_POST["index"];
    
    $checkIfExistQuery = "SELECT * from food_rating where user_id = '" . $userId . "' and food_id = '" . $foodId . "'";
    if ($result = mysqli_query($conn, $checkIfExistQuery)) {
        $rowcount = mysqli_num_rows($result);
    }
    
    if ($rowcount == 0) {
        $insertQuery = "INSERT INTO food_rating(user_id,food_id, rating) VALUES ('" . $userId . "','" . $foodId . "','" . $rating . "') ";
        $result = mysqli_query($conn, $insertQuery);
        echo "success";
    } else {
        echo "Already Voted!";
    }
}else{
    echo "fck";
}
