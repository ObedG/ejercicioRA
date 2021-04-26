<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <script src="https://aframe.io/releases/1.2.0/aframe.min.js"></script>
    <script src="https://jeromeetienne.github.io/AR.js/aframe/build/aframe-ar.js"></script>
    <script src="https://www.lokeldigital.com/shared-code/a-frame/onclick.js"></script>
    <script src="https://unpkg.com/aframe-environment-component@1.1.0/dist/aframe-environment-component.min.js"></script>
    
    <script>
      function posForEl(el) {
        let pos = el.object3D.position
        return `${pos.x} ${pos.y} ${pos.z}`
      }

      function moveTo(thing) {
        let camRig = document.querySelector('#camera-rig')
        camRig.setAttribute('animation', `property: position; from: ${posForEl(camRig)};to: ${posForEl(this)};dur: 1000`)
      }
    </script>
</head>

<body>
    <a-scene>
        <a-assets>
            <a-mixin id="midpos" position="0 1 -3"> </a-mixin>

            <a-mixin id="campos" position="0 1 3"></a-mixin>

            
            <a-mixin id="ball" geometry="primitive: torusKnot;radius:1"></a-mixin>
            
         <a-mixin id="clickable" onclick="moveTo"></a-mixin>
         <a-mixin id="bouncy"
         animation__bounceup="property: position; from: 0 0 0; to: 0 20 0; easing: easeInOutQuad; dur: 500; start-events: click, animationcomplete__bouncedown"
         animation__bouncedown="property: position; from: 0 20 0; to: 0 0 0; easing: easeInOutQuad; dur: 500; start-events: animationcomplete__bounceup"
         ></a-mixin>    
         
            <a-mixin id="orange" material="color: orange"></a-mixin>
            <a-mixin id="red" material="color: #0b40e0"></a-mixin>
            
        </a-assets>
        <a-entity  id="e1" mixin=" midpos clickable">
        <a-entity mixin="orange ball bouncy" scale="0.3 0.3 0.3"></a-entity>
        </a-entity>
        
        <a-entity id="mdl" mixin=" clickable bouncy">
        <a-entity id="mod" gltf-model="ultimo.glb" scale="0.300 0.300 0.300" position="-3 1 0"> </a-entity>
        </a-entity>
         
       
        <a-entity  id="e2" mixin=" campos clickable">
        <a-entity mixin="red ball bouncy" scale="0.3 0.3 0.3"></a-entity>
        </a-entity>
        
        <a-entity id="camera-rig" position="0 1 3">
        <a-entity camera look-controls position="0 0 4" cursor="ray-origin: mouse" raycaster="objects: [geometry]"></a-entity>
        </a-entity>

    <a-entity environment></a-entity>
    </a-scene>
</body>

</html>

