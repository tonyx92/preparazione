<?php
include '../../db/db_connection.php';

$sql = "SELECT * FROM forno";

$data = []; // Initialize an array to hold the data

if ($result = $conn->query($sql)) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            // Corrected: Initialize $tmp as an array
            $tmp = [];
            $tmp['forno_id'] = $row['forno_id'];
            $tmp['forno_acceso'] = $row['forno_acceso'];
            $tmp['forno_temperatura'] = $row['forno_temperatura'];
            array_push($data, $tmp);
        }
        echo json_encode($data);
    }
}

?>

