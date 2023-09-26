<!-- Form per la ricerca -->
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="post_dimensione">Dimensione</label>
        <input type="number" step="0.01" name="utensile_dimensione" placeholder="Dimensione">
    </div>
  
    <div class="form-group">
        <input type="submit" name="cerca_barra" value="Cerca barra">
    </div>
</form>

<?php 


if (isset($_POST['cerca_barra'])) {
    $utensile_dimensione = escape($_POST['utensile_dimensione']);
    
    // Costruisci la query SQL
    $query = "SELECT * FROM utensile WHERE ABS(utensile_dimensione - $utensile_dimensione) <= 5";

    // Esegui la query
    $cerca_utensili_query = mysqli_query($conn, $query);

    // Controlla se la query ha avuto successo
    confirmQuery($cerca_utensili_query);

    // Mostra i risultati della ricerca
    while ($row = mysqli_fetch_assoc($cerca_utensili_query)) {
        echo "ID: " . $row['utensile_id'] . ", Nome utensile: " . $row['utensile_nome'] . ", Dimensione: " . $row['utensile_dimensione'] . ", Prezzo: " . $row['utensile_prezzo'] . "<br>";
    }


}
?>

