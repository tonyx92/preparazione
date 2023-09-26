
<?php
include '../../db/db_connection.php';

$sql = "SELECT *  FROM macchinario";

$data = []; // Initialize an array to hold the data

if ($result = $conn->query($sql)) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            // Corrected: Initialize $tmp as an array
            $tmp = [];
            $tmp['macchinario_id'] = $row['macchinario_id'];
            $tmp['macchinario_temperatura'] = $row['macchinario_temperatura'];
            $tmp['macchinario_time'] = $row['macchinario_time'];
            array_push($data, $tmp);
        }
        echo json_encode($data);
    }
}

?>
