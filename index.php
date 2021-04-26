<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <script src="https://aframe.io/releases/1.2.0/aframe.min.js"></script>
    <script src="https://jeromeetienne.github.io/AR.js/aframe/build/aframe-ar.js"></script>
</head>

<body>
<a-scene inspector="" keyboard-shortcuts="" screenshot="" vr-mode-ui="" device-orientation-permission-ui="">
        <a-assets>
            <a-mixin id="midpos" position="1 1 0"> </a-mixin>

            <a-mixin id="campos" position="0 1 3"></a-mixin>

            
            <a-mixin id="ball" geometry="primitive: sphere;radius:1"></a-mixin>
            
         <a-mixin id="clickable" onclick="moveTo"></a-mixin>
         <a-mixin id="bouncy" animation__bounceup="property: position; from: 0 0 0; to: 0 20 0; easing: easeInOutQuad; dur: 500; start-events: click, animationcomplete__bouncedown" animation__bouncedown="property: position; from: 0 20 0; to: 0 0 0; easing: easeInOutQuad; dur: 500; start-events: animationcomplete__bounceup"></a-mixin>    
         
            <a-mixin id="orange" material="color: orange"></a-mixin>
            <a-mixin id="red" material="color: red"></a-mixin>
            
        </a-assets>
        <a-entity id="e1" mixin="midpos clickable">
        <a-entity mixin="orange ball bouncy" material="" geometry="primitive: torusKnot" animation__bounceup="dur: 500; easing: easeInOutQuad; from: 0 20 0; property: position; startEvents: click, animationcomplete__bouncedown; to: 0 0 0" animation__bouncedown="dur: 500; easing: easeInOutQuad; from: 0 0 0; property: position; startEvents: animationcomplete__bounceup; to: 0 20 0" scale="0.3 0.3 0.3"></a-entity>
        </a-entity>
        
        <a-entity id="mdl" mixin="clickable bouncy" animation__bounceup="dur: 500; easing: easeInOutQuad; from: 0 0 0; property: position; startEvents: click, animationcomplete__bouncedown; to: 0 20 0" animation__bouncedown="dur: 500; easing: easeInOutQuad; from: 0 20 0; property: position; startEvents: animationcomplete__bounceup; to: 0 0 0">
        <a-entity id="mod" gltf-model="som.glb" scale="0.3 0.19 0.3" mixin="bouncy" animation__bounceup="dur: 500; easing: easeInOutQuad; from: 0 0 0; property: position; startEvents: click, animationcomplete__bouncedown; to: 0 5 0" animation__bouncedown="dur: 500; easing: easeInOutQuad; from: 0 5 0; property: position; startEvents: animationcomplete__bounceup; to: 0 0 0" position=""> </a-entity>
        </a-entity>
         
       
        <a-entity id="e2" mixin="campos clickable">
        <a-entity mixin="red ball bouncy" material="color: #0b40e0" geometry="primitive: torusKnot" animation__bounceup="dur: 500; easing: easeInOutQuad; from: 0 0 0; property: position; startEvents: click, animationcomplete__bouncedown; to: 0 20 0" animation__bouncedown="dur: 500; easing: easeInOutQuad; from: 0 20 0; property: position; startEvents: animationcomplete__bounceup; to: 0 0 0" scale="0.3 0.3 0.3"></a-entity>
        </a-entity>
    <div class="a-loader-title" style="display: none;"></div></a-scene>
       
</body>

</html>
