window.onload = function() {
  var barra = document.querySelector('.barra');
  var texto = document.querySelector('.texto');
  var ascene = document.querySelector('#ascene');

  var porcentaje = 0;
  var intervalo = setInterval(function() {
      if (porcentaje >= 100) {
          clearInterval(intervalo);
          setTimeout(function() {
            ascene.setAttribute('visible', 'true')
            document.querySelector('.contenedor').style.display = 'none';
          }, 500);
      } else {
          porcentaje += 1;
          barra.style.width = porcentaje + '%';
          texto.innerHTML = 'Loading ' + porcentaje + '%';
      }
  }, 20);
}
