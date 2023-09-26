

<?php 


if(isset($_GET['p_id'])){
    $the_utensile_id = escape($_GET['p_id']);
}


$query = "SELECT * FROM utensile WHERE utensile_id = $the_utensile_id ";

$select_utensile_by_id = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($select_utensile_by_id)){
    $utensile_id = $row['utensile_id'];
    $utensile_nome = $row['utensile_nome'];
    $utensile_dimensione = $row['utensile_dimensione'];
    $utensile_prezzo = $row['utensile_prezzo'];
}


    if(isset($_POST['update_utensile'])){

       
        $utensile_nome = escape($_POST['utensile_nome']);
        $utensile_dimensione = escape($_POST['utensile_dimensione']);
        $utensile_prezzo = escape($_POST['utensile_prezzo']);


        $query = "UPDATE utensile SET ";
        $query .= "utensile_nome = '{$utensile_nome}', ";
        $query .= "utensile_dimensione = '{$utensile_dimensione}', ";
        $query .= "utensile_prezzo = '{$utensile_prezzo}' ";
        $query .= "WHERE utensile_id = {$the_utensile_id}";

        $update_utensile = mysqli_query($conn, $query);

        confirmQuery($update_utensile);
        header("Location: index.php");
    }

?>

<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
		<label for="post_author">Nome utensile</label>
		<input type="text" value="<?php echo $utensile_nome; ?>" class="form-control" name="utensile_nome">
	</div>
    <div class="form-group">
        <label for="post_dimensione">Dimensione</label>
        <input type="number" step="0.01" value="<?php echo $utensile_dimensione; ?>" name="utensile_dimensione" >
    </div>
    <div class="form-group">
        <label for="post_prezzo">Prezzo</label>
        <input type="number" step="0.01" value="<?php echo $utensile_prezzo; ?>" name="utensile_prezzo" >
    </div>
    <div class="form-group">
		<input type="submit" name="update_utensile" value="Modifica utensile">
	</div>




</form>