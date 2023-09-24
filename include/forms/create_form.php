<br>
<h1>Crea un nuovo elemento barra</h1>

<?php 


if (isset($_POST['crea_barra'])) {



    $utensile_nome = escape($_POST['utensile_nome']);
    $utensile_dimensione = escape($_POST['utensile_dimensione']);
    $utensile_prezzo = escape($_POST['utensile_prezzo']);
   


    $query = "INSERT INTO utensile(utensile_nome, utensile_dimensione, utensile_prezzo ) ";
    $query .= " VALUES( '{$utensile_nome}','{$utensile_dimensione}','{$utensile_prezzo}' ) ";

    $create_utensili_query = mysqli_query($conn, $query);

    
    

    confirmQuery($create_utensili_query);

    header("Location: index.php");
   


    
    


}


?>
<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="post_nome">Nome Barra</label>
        <input type="text" name="utensile_nome" placeholder="Nome barra">
    </div>
    <div class="form-group">
        <label for="post_dimensione">Dimensione</label>
        <input type="number" step="0.01" name="utensile_dimensione" placeholder="Dimensione">
    </div>
    <div class="form-group">
        <label for="post_prezzo">Prezzo</label>
        <input type="number" step="0.01" name="utensile_prezzo" placeholder="Prezzo">
    </div>
    <div class="form-group">
		<input  type="submit" name="crea_barra" value="Aggiungi barra">
	</div>

</form>