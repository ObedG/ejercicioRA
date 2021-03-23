<!DOCTYPE html>
<html>
    <head>
        <!-- script de A-Frane version1 1.0.0 -->
        <script src="https://aframe.io/releases/1.0.4/aframe.min.js"></script>
        <!-- script de AR.JS con soporte de marker + location -->
        <script src="https://jeromeetienne.github.io/AR.js/aframe/build/aframe-ar.js"></script>
    </head>
    <body style="margin : 0px; overflow: hidden;">
        <a-scene embedded arjs>
            <a-marker preset="hiro">
               <a-entity gltf-model="pez.obj" scale="5 5 5" crossOrigin="anonymous"> 
            </a-marker>
        <a-entity camera></a-entity>
        </a-scene>
    </body>
</html