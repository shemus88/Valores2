if('serviceWorker' in navigator){
    window.addEventListener('load',function(){
        navigator.serviceWorker.register('/sw.js')
     .then(function(){
     console.log('Servidor Registrado!');
     })
     .catch(function(err){
      console.log('Error al Registrarte:(',err);
     });
    });
}