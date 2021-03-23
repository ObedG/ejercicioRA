  
<!DOCTYPE html>
<html>  
  <head>
    <script src="https://aframe.io/releases/1.0.4/aframe.min.js"></script>
    <script src="https://jeromeetienne.github.io/AR.js/aframe/build/aframe-ar.js"></script>
  </head>  
  <body>
    <a-scene embedded arjs>
      <a-entity scale=".2 .2 .2"> 
        <a-entity gltf-model="mesa.glb" scale="10 10 10" rotation="75 0 250" crossOrigin="anonymous"></a-entity>       
        <a-marker-camera preset='hiro'></a-marker-camera>
      </a-entity>
     </a-scene>
  </body>
</html>
