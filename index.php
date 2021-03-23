<!DOCTYPE html>
<html>
    <head>
        <!-- script de A-Frane version1 1.0.0 -->
        <script src="https://aframe.io/releases/1.0.4/aframe.min.js"></script>
        
        <script src="https://jeromeetienne.github.io/AR.js/aframe/build/aframe-ar.js"></script>
    </head>
    <body>
        <a-scene embedded arjs>
            <a-entity>
               <a-entity gltf-model="pez.obj" scale="5 5 5" crossOrigin="anonymous"> 
            </a-entity>
        <a-entity-camera preset="hiro"></a-entity-camera>
        </a-scene>
    </body>
</html>
