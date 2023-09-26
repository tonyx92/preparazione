//    //update utilizzando fetch api()
let macchinario;

const updateMacchinarioStatus = () => {
 fetch('./include/chart/update_temperatura.php', {
     method: 'GET',
     headers: {
         'Content-Type': 'application/json'
     }
 })
 .then(response => response.json())
 .then(data => {
     macchinario = data;
     console.log('Dati ricevuti: ', data);

     //estrazione e uilizzo dati
     const macchinarioTemperatura = data[0].macchinario_temperatura;
     console.log('Macchinario temperatura: ', macchinarioTemperatura);

     //aggiornamento dell'html
     const element = document.getElementById('macchinario');
     element.innerHTML = `macchinario temperatura fetch api(): ${macchinarioTemperatura}`;
 })
 .catch((error) =>{
     console.error('Error ', error);
 });
 }

 setInterval(updateMacchinarioStatus, 5000);

 









    
