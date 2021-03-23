<!DOCTYPE html>
<html>
    <head>
        <!-- script de A-Frane version1 1.0.0 -->
        <script src="https://aframe.io/releases/0.8.0/aframe.min.js"></script>
        
        <script src="https://jeromeetienne.github.io/AR.js/aframe/build/aframe-ar.js"></script>
    </head>
    
    <body>
        <a-scene embedded arjs>
            <a-entity scale=".2 .2 .2">
               <a-entity obj-model="pez.obj" scale="3 3 3" crossOrigin="anonymous"> 
            </a-entity>
        <a-marker-camera preset='hiro'></a-marker-camera>
        </a-scene>
    </body>
</html>
