<html>

<head>
    <meta charset="utf-8">
    <title>test</title>
    <script src="https://aframe.io/releases/1.3.0/aframe.min.js"></script>
    <script src="https://unpkg.com/aframe-event-set-component@^4.0.0/dist/aframe-event-set-component.min.js"></script>

    <script>
        AFRAME.registerComponent('event-snow', {
            init: function () {
                var scene1 = document.querySelector('#scene1')
                var scene2 = document.querySelector('#scene2')
                var camera1 = document.querySelector('#camera1')
                var video = document.querySelector('#testVideo')

                var el = this.el
                el.addEventListener('click', function () {
                    scene1.setAttribute('visible', 'false')
                    scene2.setAttribute('visible', 'true')
                    camera1.setAttribute('fov', '80')

                    video.src = "assets/videos/snow.mp4";
                    video.play();
                });
                el.addEventListener('mouseenter', function () {
                    console.log('lo estamos viendo');
                    el.setAttribute('opacity', '1.5')
                });
                el.addEventListener('mouseleave', function () {
                    console.log('dejamos de verlo');
                    el.setAttribute('opacity', '1')
                });
            }
        })

        AFRAME.registerComponent('event-debris', {
            init: function () {
                var scene1 = document.querySelector('#scene1')
                var scene2 = document.querySelector('#scene2')
                var video = document.querySelector('#testVideo')
                var camera1 = document.querySelector('#camera1')

                var el = this.el
                el.addEventListener('click', function () {
                    scene1.setAttribute('visible', 'false')
                    camera1.setAttribute('fov', '80')

                    scene2.setAttribute('visible', 'true')
                    video.src = "assets/videos/forest.mp4";
                    video.play();
                    console.log('hola')
                });
                el.addEventListener('mouseenter', function () {
                    console.log('lo estamos viendo');
                    el.setAttribute('opacity', '1.5')
                });
                el.addEventListener('mouseleave', function () {
                    console.log('dejamos de verlo');
                    el.setAttribute('opacity', '1')
                });
            }
        })

        AFRAME.registerComponent('event-rain', {
            init: function () {
                var scene1 = document.querySelector('#scene1')
                var scene2 = document.querySelector('#scene2')
                var video = document.querySelector('#testVideo')
                var camera1 = document.querySelector('#camera1')

                var el = this.el
                el.addEventListener('click', function () {
                    scene1.setAttribute('visible', 'false')
                    scene2.setAttribute('visible', 'true')
                    camera1.setAttribute('fov', '80')

                    video.src = "assets/videos/street.mp4";
                    video.play();
                    console.log('hola')
                });
                el.addEventListener('mouseenter', function () {
                    console.log('lo estamos viendo');
                    el.setAttribute('opacity', '1.5')
                });
                el.addEventListener('mouseleave', function () {
                    console.log('dejamos de verlo');
                    el.setAttribute('opacity', '1')
                });
            }
        })

        AFRAME.registerComponent('event-insects', {
            init: function () {
                var scene1 = document.querySelector('#scene1')
                var scene2 = document.querySelector('#scene2')
                var video = document.querySelector('#testVideo')
                var camera1 = document.querySelector('#camera1')

                var el = this.el
                el.addEventListener('click', function () {
                    scene1.setAttribute('visible', 'false')
                    // scene1.setAttribute('rotation', "0 100 0")
                    scene2.setAttribute('visible', 'true')
                    camera1.setAttribute('fov', '80')


                    scene1.pause()
                    video.src = "assets/videos/dessert.mp4";
                    video.play();
                    console.log('hola')
                });
                el.addEventListener('mouseenter', function () {
                    console.log('lo estamos viendo');
                    el.setAttribute('opacity', '1.5')
                });
                el.addEventListener('mouseleave', function () {
                    console.log('dejamos de verlo');
                    el.setAttribute('opacity', '1')
                });
            }
        })


        AFRAME.registerComponent('event-pause', {
            init: function () {
                var scene1 = document.querySelector('#scene1')
                var scene2 = document.querySelector('#scene2')
                var video = document.querySelector('#testVideo')
                var camera1 = document.querySelector('#camera1')

                var el = this.el
                el.addEventListener('click', function () {
                    scene1.setAttribute('visible', 'true')
                    scene2.setAttribute('visible', 'false')
                    camera1.setAttribute('fov', '50')
                    camera1.setAttribute('position', '0 1.5 8')

                    video.pause();
                    console.log('hola')
                });
                el.addEventListener('mouseenter', function () {
                    console.log('lo estamos viendo');
                    el.setAttribute('opacity', '1.5')
                });
                el.addEventListener('mouseleave', function () {
                    console.log('dejamos de verlo');
                    el.setAttribute('opacity', '1')
                });
            }
        })

    </script>
</head>

<body>
    <a-scene>
        <a-assets>
            <video id="testVideo" loop="true" src="assets/videos/dessert.mp4"> </video>
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

        <a-camera id="camera1" fov="50" position="0 1.5 8" rotation="0 0 0" cursor="rayOrigin: mouse">
            <a-cursor></a-cursor>
        </a-camera>



        <a-entity id="scene1" visible="true">

            <!-- <a-sphere position="0 1.25 -5" radius="1.25" color="#EF2D5E" shadow
                event-set__enter="_event: mouseenter; color: #026fc9"
                event-set__leave="_event: mouseleave; color: #EF2D5E">
                <a-animation attribute="position" dur="1000" fill="forwards" to="0 2.5 -6" direction="alternate"
                    begin="click"></a-animation>
            </a-sphere> -->


            <!-- <a-plane rotation="0 45 0" color="#101010" opacity="0.5" transparent="true" height="11" width="6"
                position="-10.105 1.5 -7.890"></a-plane>

            <a-plane rotation="0 45 0" src="#my-snow" opacity="1" transparent="true" height="3.5" width="5"
                position="-9.703 4.5 -7.5" event-set__enter="_event: mouseenter; color: #026fc9"
                event-set__leave="_event: mouseleave; color: #4CC3D9" event-snow></a-plane>

            <a-plane rotation="0 45 0" src="#my-Debris" opacity="1" transparent="true" height="3.5" width="5"
                position="-9.703 -0.8 -7.5" event-debris></a-plane> -->
            <!-- 
           -->

            <!-- <a-curvedimage height="1.30" radius="10" theta-length="40" rotation="0 160 0" scale="1 1 1"
                position="0 6.5 0" src="#my-logo">
            </a-curvedimage> -->

            <!--  -->

            <!-- <a-curvedimage height="8" radius="10" theta-length="30" rotation="0 220 0" scale="1 1 1" position="0 1 0"
                transparent="true" opacity=0.5 color="#101010">
            </a-curvedimage> -->

            <a-curvedimage height="1.30" radius="10" theta-length="40" rotation="0 160 0" scale="1 1 1"
                position="0 6.5 0" src="#my-logo">
            </a-curvedimage>

            <a-curvedimage height="8" radius="10" theta-length="70" rotation="0 145 0" scale="1 1 1" position="0 1 0"
                transparent="true" opacity=0.5 color="#101010">
            </a-curvedimage>

            <a-curvedimage height="8" radius="10" theta-length="30" rotation="0 220 0" scale="1 1 1" position="0 1 0"
                transparent="true" opacity=0.5 color="#101010">
            </a-curvedimage>

            <a-curvedimage height="3.5" radius="9.9" theta-length="26" rotation="0 222 0" scale="1 1 1"
                position="0 2.9 0" src="#my-snow" event-snow>
            </a-curvedimage>

            <a-curvedimage height="3.5" radius="9.9" theta-length="26" rotation="0 222 0" scale="1 1 1"
                position="0 -0.9 0" src="#my-Debris" event-debris>
            </a-curvedimage>



            <!-- <a-plane src="#my-logo" opacity="1" transparent="true" height="1" width="5" position="0 8 -9"></a-plane>

            <a-plane color="#101010" opacity="0.5" transparent="true" height="11" width="16"
                position="0 1.5 -10"></a-plane>

            <a-plane src="#my-Cardstart" opacity="1" transparent="true" height="5" width="13"
                position="0 3.2 -9"></a-plane>



            <a-plane src="#my-about" opacity="1" transparent="true" height="2.8" width="4"
                position="0 -1.3 -9"></a-plane>

            <a-plane src="#my-settings" opacity="1" transparent="true" height="2.8" width="4"
                position="-4.5 -1.3 -9"></a-plane>

            <a-plane src="#my-exit" opacity="1" transparent="true" height="2.8" width="4"
                position="4.5 -1.3 -9"></a-plane> -->

            <!-- <a-image scale="1.5 1 1" transparent="true" position="0 1.6 -1" src="#my-Cardstart"></a-image> -->

            <!-- 






         -->

            <!-- <a-plane color="#101010" opacity="0.5" transparent="true" height="11" width="8"
                position="12.5 1.5 -10"></a-plane> -->



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
                position="0 2.9 0" src="#my-rain" event-rain>
            </a-curvedimage>

            <a-curvedimage height="3.5" radius="9.9" theta-length="26" rotation="0 112 0" scale="1 1 1"
                position="0 -0.9 0" src="#my-insects" event-insects>
            </a-curvedimage>


            <!-- <a-plane rotation="0 -45 0" color="#101010" opacity="0.5" transparent="true" height="11" width="6"
                position="10.105 1.5 -7.890"></a-plane>

            <a-plane rotation="0 -45 0" src="#my-rain" opacity="1" transparent="true" height="3.5" width="5"
                position="9.703 4.5 -7.5" event-rain></a-plane>

            <a-plane rotation="0 -45 0" src="#my-insects" opacity="1" transparent="true" height="3.5" width="5"
                position="9.703 -0.8 -7.5" event-insects></a-plane> -->

            <a-sky src="#my-id" rotation="0 340 0"></a-sky>
        </a-entity>

        <a-entity id="scene2" rotation="0 -30 0" visible="false">
            <a-videosphere rotation="0 -90 0" src="#testVideo"></a-videosphere>

            <a-image id="videoControls" src="#play" position="1.7 0.2 -2.3" scale="0.2 0.2 1" event-pause>
            </a-image>
        </a-entity>




    </a-scene>

    <div style="position: fixed; z-index: 1; top: 5px; left: 5px; ">
        <button onclick="changeScrren()">Menu</button>
    </div>

    <script src="js/script.js"></script>

</body>

</html>