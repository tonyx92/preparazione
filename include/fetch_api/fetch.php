<?php 

$query = "SELECT forno_acceso FROM forno WHERE forno_id = 1";

$result = mysqli_query($conn, $query);

$response = array('status' => false); // Default to false

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $response['status'] = (bool) $row['your_boolean_column'];
}

echo json_encode($response);


?>

<div id="status-circle"></div>
