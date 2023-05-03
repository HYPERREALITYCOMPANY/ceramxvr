  // window.addEventListener("load", function(){
  //   var loader = document.getElementById("loader");
  //   // Añade un retraso de 3 segundos antes de ocultar el loader
  //   setTimeout(function(){
  //       console.log('estamos aqui 3 segundos');
  //       loader.style.display = 'none';
  //   }, 500);
  // });
  

  function changeScrren() {
    console.log('pause');

    var scene1 = document.querySelector('#scene1')
    var scene2 = document.querySelector('#scene2')
    var video = document.querySelector('#testVideo')

    console.log(scene1);

    // scene1.pause()
    video.play()

    // scene1.style.display = 'block';
    // scene2.style.display = 'none'
    // video.pause();
}

  