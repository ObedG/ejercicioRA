<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <script src="https://aframe.io/releases/1.2.0/aframe.min.js"></script>
    <script src="https://jeromeetienne.github.io/AR.js/aframe/build/aframe-ar.js"></script>
</head>

<body>
    <a-scene>
        <a-assets>
            <a-mixin id="midpos" position="1 1 0"> </a-mixin>

            <a-mixin id="campos" position="0 1 3"></a-mixin>

         <a-mixin id="clickable" onclick="moveTo"></a-mixin>
         <a-mixin id="bouncy"
         animation__bounceup="property: position; from: 0 0 0; to: 0 1 0; easing: easeInOutQuad; dur: 500; start-events: click, animationcomplete__bouncedown"
         animation__bouncedown="property: position; from: 0 1 0; to: 0 0 0; easing: easeInOutQuad; dur: 500; start-events: animationcomplete__bounceup"
         ></a-mixin>    
            
        </a-assets>
        <a-entity id="mdl" mixin="campos clickable bouncy">
        <a-entity id="mod" gltf-model="som.glb" scale="0.190 0.190 0.190"> </a-entity>
        </a-entity>
         
        
    </a-scene>
</body>

</html>
