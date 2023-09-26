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
    
<h1>Testing</h1>


        <p>Qua andra la view table e faremo una o piu tabelle con rappresentazione GET e AJAX/FETCH</p>

        <?php include './include/forms/tabella_risultati.php' ?>
   
        <p>Qua andranno le form con richieste CREATE-UPDATE-DELETE</p>

        <?php include './include/forms/create_form.php' ?>
  
        <h1>Fetch api e Ajax</h1> 
        <div id="output"></div>
        <div id="ajax"></div>

    
        <h1>Ricerca barra di dimensione <= 5</h1>

        <?php include './include/forms/ricerca_vicino/ricerca_vicino.php' ?>


        <script src="./include/fetch_api/fetch_accensione_forno.js"></script>  
   
 
        <script src="./include/chart/chart.js"></script>
        <div id="macchinario"></div>
        <div id="container"></div>


        <canvas id="myChart"></canvas>
        </div>
 
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
            labels: ['Macchinari_1', 'Macchinario_2'],
            datasets: [{
                label: 'Calore',
                data: [12, 19],
                borderWidth: 1
            }]
            },
            options: {
            scales: {
                y: {
                beginAtZero: true
                }
            }
            }
        });
        </script>

</div>

</body>
</html>





<style>
    

  
   
</style>