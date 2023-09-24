<form action="" method="post">


<table>

<thead>
    <tr>
        <th>ID</th>
        <th>Nome utensile</th>
        <th>Dimensione</th>
        <th>Prezzo</th>
        <th>Modifica</th>
        <th>Elimina</th>
    </tr>
</thead>

<tbody>



<?php

$query = "SELECT * FROM utensile";

$select_all_reports_query = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($select_all_reports_query)){
    $utensile_id = $row['utensile_id'];
    $utensile_nome = $row['utensile_nome'];
    $utensile_dimensione = $row['utensile_dimensione'];
    $utensile_prezzo = $row['utensile_prezzo'];


    echo "<tr>";

    echo "<td>{$utensile_id}</td>"; 
    echo "<td>{$utensile_nome}</td>"; 
    echo "<td>{$utensile_dimensione}</td>"; 
    echo "<td>{$utensile_prezzo}</td>"; 


    echo "<td><a href='barra.php?source=update_form&p_id={$utensile_id}'>Modifica</a></td>";
    echo "<td><a style= 'color:red;' href='index.php?delete={$utensile_id}'>Elimina</a></td>";


    
    
  

    echo "</tr>";
}

?>


<br>
<br>
</tbody>
</table>

</form>


<?php 

if (isset($_GET['delete'])) {

    $the_utensile_id = $_GET['delete'];
    $query = "DELETE FROM utensile WHERE utensile_id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $the_utensile_id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("Location: index.php");
    exit();
    
}



?>