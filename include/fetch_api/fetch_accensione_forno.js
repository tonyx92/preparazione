//    //update utilizzando fetch api()
   let forni;

  const updateFornoStatus = () => {
   fetch('./include/fetch_api/search.php', {
       method: 'GET',
       headers: {
           'Content-Type': 'application/json'
       }
   })
   .then(response => response.json())
   .then(data => {
       forni = data;
       console.log('Dati ricevuti: ', data);

       //estrazione e uilizzo dati
       const fornoAcceso = data[0].forno_acceso;
       console.log('Forno acceso: ', fornoAcceso);

       //aggiornamento dell'html
       const element = document.getElementById('output');
       element.innerHTML = `Stato del forno usando fetch api(): ${fornoAcceso}`;
   })
   .catch((error) =>{
       console.error('Error ', error);
   });
   }
   

   setInterval(updateFornoStatus, 5000);


//    //update utilizzando ajax
  const updateFornoStatusAjax = () => {
   const xhttp = new XMLHttpRequest();
   xhttp.onreadystatechange = function() {
       if (this.readyState == 4 && this.status == 200) {
           const data = JSON.parse(this.responseText);

           // Estrai e utilizza i dati
           const fornoAcceso = data[1].forno_acceso;
           console.log('Forno acceso: ', fornoAcceso);

           // Aggiorna lo stato 
           const element = document.getElementById('ajax');
           element.innerHTML = `Stato del forno usando ajax: ${fornoAcceso}`;
       }
   };
   xhttp.open("GET", "./include/fetch_api/search.php", true);
   xhttp.setRequestHeader("Content-Type", "application/json");
   xhttp.send();
};

setInterval(updateFornoStatusAjax, 5000);


