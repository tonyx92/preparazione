<?php

function escape($string){

    global $conn;

    return mysqli_real_escape_string($conn, trim($string));
}


function confirmQuery($result){

global $conn;

if (!$result) {
    die("Query Failed! " . mysqli_error($conn));
    } 


}


?>