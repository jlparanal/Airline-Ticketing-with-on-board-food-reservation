<?php

function userRating($userId, $foodId, $conn)
{
    $average = 0;
    $avgQuery = "SELECT rating FROM food_rating WHERE user_id = '" . $userId . "' and food_id = '" . $foodId . "'";
    $total_row = 0;
    
    if ($result = mysqli_query($conn, $avgQuery)) {
        // Return the number of rows in result set
        $total_row = mysqli_num_rows($result);
    } // endIf
    
    if ($total_row > 0) {
        foreach ($result as $row) {
            $average = round($row["rating"]);
        } // endForeach
    } // endIf
    return $average;
}
 // endFunction
function totalRating($foodId, $conn)
{
    $totalVotesQuery = "SELECT * FROM food_rating WHERE food_id = '" . $foodId . "'";
    
    if ($result = mysqli_query($conn, $totalVotesQuery)) {
        // Return the number of rows in result set
        $rowCount = mysqli_num_rows($result);
        // Free result set
        mysqli_free_result($result);
    } // endIf
    
    
}//endFunction
