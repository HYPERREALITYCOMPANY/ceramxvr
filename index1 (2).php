<html>

<head>
    <meta charset="utf-8">
    <title>ceramx</title>
    <script src="https://aframe.io/releases/1.3.0/aframe.min.js"></script>
    <script src="https://unpkg.com/aframe-event-set-component@^4.0.0/dist/aframe-event-set-component.min.js"></script>

    <script>
        AFRAME.registerComponent('event-snow', {
            init: function () {
                var scene1 = document.querySelector('#scene1')
                var scene2 = document.querySelector('#scene2')

                var camera1 = document.querySelector('#camera1')
                var video = document.querySelector('#testVideo')
                var hover2 = document.querySelector('#hover2')
                var menuPause = document.querySelector('#menuPause');


                var el = this.el
                el.addEventListener('click', function () {
                    scene1.setAttribute('visible', 'false')
                    scene1.setAttribute('position', '0 15 0')
                    scene2.setAttribute('rotation', '0 0 0')
                    scene2.setAttribute('visible', 'true')
                    camera1.setAttribute('fov', '80')
                    menuPause.setAttribute('position', '0 25 0')

                    video.src = "assets/videos/snow.mp4";
                    video.play();
                });
                el.addEventListener('mouseenter', function () {
                    el.setAttribute('opacity', '1.5')
                    hover2.setAttribute('opacity', '0.25')
                });
                el.addEventListener('mouseleave', function () {
                    el.setAttribute('opacity', '0')
                });
            }
        })

        AFRAME.registerComponent('event-debris', {
            init: function () {
                var scene1 = document.querySelector('#scene1')
                var scene2 = document.querySelector('#scene2')
                var video = document.querySelector('#testVideo')
                var camera1 = document.querySelector('#camera1')
                var hover1 = document.querySelector('#hover1')
                var menuPause = document.querySelector('#menuPause');

                var el = this.el
                el.addEventListener('click', function () {
                    scene1.setAttribute('visible', 'false')
                    scene1.setAttribute('position', '0 15 0')
                    scene2.setAttribute('rotation', '0 0 0')
                    scene2.setAttribute('visible', 'true')
                    camera1.setAttribute('fov', '80')
                    menuPause.setAttribute('position', '0 25 0')

                    video.src = "assets/videos/debris.mp4";
                    video.play();
                    console.log('hola')
                });
                el.addEventListener('mouseenter', function () {
                    el.setAttribute('opacity', '1.5')
                    hover1.setAttribute('opacity', '0.25')
                });
                el.addEventListener('mouseleave', function () {
                    el.setAttribute('opacity', '1')
                    hover1.setAttribute('opacity', '0')
                });
            }
        })

        AFRAME.registerComponent('event-rain', {
            init: function () {
                var scene1 = document.querySelector('#scene1')
                var scene2 = document.querySelector('#scene2')
                var video = document.querySelector('#testVideo')
                var camera1 = document.querySelector('#camera1')
                var hover3 = document.querySelector('#hover3');
                var menuPause = document.querySelector('#menuPause');

                var el = this.el
                el.addEventListener('click', function () {
                    scene1.setAttribute('visible', 'false')
                    scene1.setAttribute('position', '0 15 0')
                    scene2.setAttribute('rotation', '0 0 0')
                    scene2.setAttribute('visible', 'true')
                    camera1.setAttribute('fov', '80')
                    menuPause.setAttribute('position', '0 25 0')

                    video.src = "assets/videos/rain.mp4";
                    video.play();
                });
                el.addEventListener('mouseenter', function () {
                    el.setAttribute('opacity', '1.5')
                    hover3.setAttribute('opacity', '0.25')
                });
                el.addEventListener('mouseleave', function () {
                    el.setAttribute('opacity', '1')
                    hover3.setAttribute('opacity', '0')

                });
            }
        })

        AFRAME.registerComponent('event-insects', {
            init: function () {
                var scene1 = document.querySelector('#scene1')
                var scene2 = document.querySelector('#scene2')
                var video = document.querySelector('#testVideo')
                var camera1 = document.querySelector('#camera1')
                var hover4 = document.querySelector('#hover4')
                var menuPause = document.querySelector('#menuPause');

                var el = this.el
                el.addEventListener('click', function () {
                    scene1.setAttribute('visible', 'false')
                    // scene1.setAttribute('rotation', "0 100 0")
                    scene1.setAttribute('visible', 'false')
                    scene1.setAttribute('position', '0 15 0')
                    scene2.setAttribute('rotation', '0 0 0')
                    scene2.setAttribute('visible', 'true')
                    camera1.setAttribute('fov', '80')
                    menuPause.setAttribute('position', '0 25 0')

                    scene1.pause()
                    video.src = "assets/videos/insects.mp4";
                    video.play();
                });
                el.addEventListener('mouseenter', function () {
                    el.setAttribute('opacity', '1.5')
                    hover4.setAttribute('opacity', '0.25')

                });
                el.addEventListener('mouseleave', function () {
                    el.setAttribute('opacity', '1')
                    hover4.setAttribute('opacity', '0')

                });
            }
        })


        AFRAME.registerComponent('event-pause', {
            init: function () {
                var scene1 = document.querySelector('#scene1')
                var scene2 = document.querySelector('#scene2')
                var video = document.querySelector('#testVideo')
                var camera1 = document.querySelector('#camera1')
                var menuPause = document.querySelector('#menuPause');
                var video1 = document.querySelector('#video1');

                var el = this.el
                el.addEventListener('click', function () {
                    menuPause.setAttribute('visible', 'true')
                    video1.setAttribute('color', '#1A5DA9')
                    menuPause.setAttribute('position', '0 0 0')

                    video.pause();

                    // camera1.setAttribute('position', '0 1.5 8')
                    // let arrayPalabras = video.src.split("/");
                    // let ultimaPalabra = arrayPalabras[arrayPalabras.length - 1];

                    // console.log(ultimaPalabra); // imprime "ejemplo"





                });
                el.addEventListener('mouseenter', function () {
                    console.log('lo estamos viendo');

                });
                el.addEventListener('mouseleave', function () {
                    console.log('dejamos de verlo');

                });
            }
        })






        AFRAME.registerComponent('event-continue', {
            init: function () {
                var scene1 = document.querySelector('#scene1')
                var scene2 = document.querySelector('#scene2')
                var video = document.querySelector('#testVideo')
                var camera1 = document.querySelector('#camera1')
                var menuPause = document.querySelector('#menuPause');
                var video1 = document.querySelector('#video1');

                var el = this.el
                el.addEventListener('click', function () {
                    menuPause.setAttribute('visible', 'false')
                    menuPause.setAttribute('position', '0 25 0')

                    // camera1.setAttribute('position', '0 1.5 8')
                    video1.setAttribute('color', '')


                    video.play();
                });
                el.addEventListener('mouseenter', function () {
                    console.log('lo estamos viendo');

                });
                el.addEventListener('mouseleave', function () {
                    console.log('dejamos de verlo');

                });
            }
        })



        AFRAME.registerComponent('event-1', {
            init: function () {

                var video = document.querySelector('#testVideo')

                var el = this.el
                el.addEventListener('click', function () {
                    // menuPause.setAttribute('visible', 'false')

                    // camera1.setAttribute('position', '0 1.5 8')
                    // video1.setAttribute('color', '')


                    // video.play();
                    console.log('hola1')

                    let arrayPalabras = video.src.split("/");
                    let ultimaPalabra = arrayPalabras[arrayPalabras.length - 1];


                    // dessert
                    // street
                    // forest
                    // snow
                    if (ultimaPalabra === 'snow.mp4') {
                        video.src = "assets/videos/street.mp4";
                        video.play()

                        console.log('estamos en snow');
                    }
                    if (ultimaPalabra === 'street.mp4') {
                        video.src = "assets/videos/forest.mp4";

                        console.log(ultimaPalabra);
                        console.log('estamos en street');

                    }
                    if (ultimaPalabra === 'forest.mp4') {
                        video.src = "assets/videos/dessert.mp4";

                        console.log(ultimaPalabra);
                        console.log('estamos en forest');

                    }
                    if (ultimaPalabra === 'dessert.mp4') {
                        video.src = "assets/videos/snow.mp4";

                        console.log(ultimaPalabra);
                        console.log('estamos en dessert');

                    }

                    console.log(ultimaPalabra); // imprime "ejemplo"
                });
                el.addEventListener('mouseenter', function () {
                    console.log('lo estamos viendo');

                });
                el.addEventListener('mouseleave', function () {
                    console.log('dejamos de verlo');

                });
            }
        })









        AFRAME.registerComponent('event-quit', {
            init: function () {
                var scene1 = document.querySelector('#scene1')
                var scene2 = document.querySelector('#scene2')
                var video = document.querySelector('#testVideo')
                var camera1 = document.querySelector('#camera1')
                var menuPause = document.querySelector('#menuPause');
                var video1 = document.querySelector('#video1');

                var el = this.el
                el.addEventListener('click', function () {
                    video.pause();
                    menuPause.setAttribute('visible', 'false')
                    menuPause.setAttribute('position', '0 25 0')
                    scene1.setAttribute('visible', 'true')
                    scene1.setAttribute('position', '0 0 0')
                    video1.setAttribute('color', '')

                    scene2.setAttribute('visible', 'false')
                    camera1.setAttribute('fov', '50')

                    // camera1.setAttribute('position', '0 1.5 8')

                    console.log('hola')
                });
                el.addEventListener('mouseenter', function () {
                    console.log('lo estamos viendo');

                });
                el.addEventListener('mouseleave', function () {
                    console.log('dejamos de verlo');

                });
            }
        })





        AFRAME.registerComponent("test", {
            init: function () {
                var cursor = document.querySelector("a-cursor")
                if (AFRAME.utils.device.isMobile() === false) {
                    console.log(cursor);
                    console.log('estamos en mobil');
                    cursor.setAttribute("visible", false);
                    //or just cursor.parentNode.removeChild(cursor)
                    //  this.el.sceneEl.setAttri3bute("cursor", "rayOrigin", "mouse")
                }
            }
        })




    </script>
    <style>
        .curved-image:hover {
            filter: brightness(1.2);
            transform: scale(1.1);
        }
    </style>
</head>

<body>
    <a-scene test>
        <a-assets>
            <video id="testVideo" preload="auto" loop="true" src="assets/videos/dessert.mp4"> </video>
            <img id="my-image" src="assets/bg.jpg">
            <img id="my-id" src="assets/sky.png">
            <img id="my-snow" src="assets/snow.png">
            <img id="my-Debris" src="assets/Debris.png">
            <img id="my-rain" src="assets/Rain.png">
            <img id="my-insects" src="assets/Insects.png">
            <img id="my-Cardstart" src="assets/cardStart.png">
            <img id="my-logo" src="assets/images/logo.png">
            <img id="my-about" src="assets/images/about.png">
            <img id="my-settings" src="assets/images/settings.png">
            <img id="my-exit" src="assets/images/exit.png">
            <img id="play" src="assets/images/test3.png">
        </a-assets>

        <a-camera id="camera1" fov="50" reverse-mouse-drag="true" position="0 1.5 8" rotation="0 250 0"
            cursor="rayOrigin: mouse" wasd-controls-enabled="false">
            <a-cursor></a-cursor>
        </a-camera>

        <a-entity id="scene1" visible="true" position="0 0 0">
            <a-curvedimage height="1.30" radius="10" theta-length="40" rotation="0 160 0" scale="1 1 1"
                position="0 6.5 0" src="#my-logo">
            </a-curvedimage>
            <a-curvedimage material="shader: flat; src: #myImage" height="8" radius="10" theta-length="70"
                rotation="0 145 0" scale="1 1 1" position="0 1 0" transparent="true" opacity=0.5 color="#101010">
            </a-curvedimage>
            <a-curvedimage height="8" radius="10" theta-length="30" rotation="0 220 0" scale="1 1 1" position="0 1 0"
                transparent="true" opacity=0.5 color="#101010">
            </a-curvedimage>
            <a-curvedimage class="curved-image" height="3.5" radius="9.9" theta-length="26" rotation="0 222 0"
                scale="1 1 1" position="0 2.9 0" src="#my-snow">
            </a-curvedimage>

            <a-curvedimage id="hover2" height="3.7" radius="9.9" theta-length="28" rotation="0 221.5 0" scale="1 1 1"
                position="0.1 2.9 0" color="#FFF" opacity="0.0" event-snow>
            </a-curvedimage>



            <a-curvedimage height="3.5" radius="9.9" theta-length="26" rotation="0 222 0" scale="1 1 1"
                position="0 -0.9 0" src="#my-Debris">
            </a-curvedimage>

            <a-curvedimage id="hover1" height="3.7" radius="9.9" theta-length="28" rotation="0 221.5 0" scale="1 1 1"
                position="0.1 -0.9 0" color="#FFF" opacity="0.0" event-debris>
            </a-curvedimage>


            <a-curvedimage height="4.5" radius="9.9" theta-length="60" rotation="0 150 0" scale="1 1 1"
                position="0 2.2 0" src="#my-Cardstart" event-start>
            </a-curvedimage>
            <a-curvedimage height="2" radius="9.9" theta-length="18" rotation="0 192 0" scale="1 1 1"
                position="0 -1.5 0" src="#my-about" event-about>
            </a-curvedimage>
            <a-curvedimage height="2" radius="9.9" theta-length="18" rotation="0 171 0" scale="1 1 1"
                position="0 -1.5 0" src="#my-settings" event-setting>
            </a-curvedimage>
            <a-curvedimage height="2" radius="9.9" theta-length="18" rotation="0 150 0" scale="1 1 1"
                position="0 -1.5 0" src="#my-exit" event-exit>
            </a-curvedimage>
            <a-curvedimage height="8" radius="10" theta-length="30" rotation="0 110 0" scale="1 1 1" position="0 1 0"
                transparent="true" opacity=0.5 color="#101010">
            </a-curvedimage>
            <a-curvedimage height="3.5" radius="9.9" theta-length="26" rotation="0 112 0" scale="1 1 1"
                position="0 2.9 0" src="#my-rain">
            </a-curvedimage>

            <a-curvedimage id="hover3" height="3.7" radius="9.9" theta-length="28" rotation="0 110.5 0" scale="1 1 1"
                position="-0.1 2.9 0" color="#FFF" opacity="0.0" event-rain>
            </a-curvedimage>



            <a-curvedimage height="3.5" radius="9.9" theta-length="26" rotation="0 112 0" scale="1 1 1"
                position="0 -0.9 0" src="#my-insects">
            </a-curvedimage>

            <a-curvedimage id="hover4" height="3.7" radius="9.9" theta-length="28" rotation="0 110.5 0" scale="1 1 1"
                position="-0.1 -0.9 0" color="#FFF" opacity="0.0" event-insects>
            </a-curvedimage>



            <a-sky src="#my-id" rotation="0 340 0"></a-sky>
        </a-entity>

        <a-entity id="scene2" rotation="0 0 0" visible="false">
            <a-videosphere id="video1" rotation="0 -90 0" src="#testVideo"></a-videosphere>
            <!-- 
            <a-entity visible="true">
                <a-plane color="#CCC" height="5" width="10" position="0 2.5 0"></a-plane>
                <a-plane color="#CCC" height="10" width="20" position="0 1.5 0"></a-plane>
                <a-plane color="#CCC" height="10" width="20" position="0 0 0"></a-plane>
            </a-entity> -->
            <a-entity id="menuPause" position="0 25 0" visible="false">
                <a-plane color="#101010" height="4.5" width="5" opacity="0.8" position="0.5 1.5 0"></a-plane>



                <a-plane color="#1A5DA9" height="1.5" width="4.5" opacity="0.8" position="0.5 2.5 0.1"
                    event-continue></a-plane>
                <a-text value="Continue" width="10" position="-0.5 2.5 0.1" event-continue></a-text>

                <!-- <a-plane color="#1A5DA9" height="1.5" width="4.5" opacity="0.8" position="0.5 1.50 0.1"
                    event-next></a-plane> -->
                <!-- <a-text value="Next Scene" width="10" position="-0.7 1.50 0.1" event-next></a-text> -->

                <!-- <a-plane color="#1A5DA9" height="1.5" width="4.5" opacity="0.8" position="0.5 1.50 0.1"
                    event-next></a-plane> -->
                <!-- <a-plane color="#39B54A" height="1.5" width="4.5" opacity="0.8" position="0.5 1.50 0.1"
                    event-1></a-plane> -->

                <a-plane color="#1A5DA9" height="1.5" width="4.5" opacity="0.8" position="0.5 0.50 0.1"
                    event-quit></a-plane>
                <a-text value="Main Menu" width="10" position="-0.7 0.5 0.1" event-quit></a-text>


            </a-entity>

            <!-- <a-plane color="#CCC" height="10" width="20" position="0 1.5 0"></a-plane>
            <a-plane color="#CCC" height="10" width="20" position="0 0 0"></a-plane> -->


            <a-plane color="#fff" height="2.25" width="4.8" position="0.5 -3 0" opacity="0" event-pause></a-plane>
            <!-- 
            <a-image id="videoControls" src="#play" position="0.5 -3 0" scale="1 1 1" event-pause>
            </a-image> -->

        </a-entity>
    </a-scene>
    <script src="js/script.js"></script>
</body>

</html>