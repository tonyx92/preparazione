<?php include './db/db_connection.php'; ?>
<?php include './include/functions/functions.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
    
<h1>Hello</h1>


<p>Qua andra la view table e faremo una o piu tabelle con rappresentazione GET e AJAX/FETCH</p>

<?php include './include/forms/tabella_risultati.php' ?>

<p>Qua andranno le form con richieste CREATE-UPDATE-DELETE</p>

<?php include './include/forms/create_form.php' ?>


<?php include './include/fetch_api/fetch.php' ?>

<p>qua creiamo una FORM che ritorna GET il determinato elemento presente o quello che si avvicina maggiormente ad esso</p>


<p>Sotto risultato nlp con python/js</p>


</body>
</html>

