window.addEventListener("load", function(){
    var loader = document.getElementById("loader");
    // Añade un retraso de 3 segundos antes de ocultar el loader
    setTimeout(function(){
        console.log('estamos aqui 3 segundos');
        loader.style.display = 'none';
    }, 500);
  });
  