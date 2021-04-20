<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <script src="https://aframe.io/releases/1.2.0/aframe.min.js"></script>
    
</head>

<body>
    <a-scene>
        <a-assets>
            <a-mixin id="midpos" position="1 1 0"> </a-mixin>

            <a-mixin id="campos" position="0 1 3"></a-mixin>

            <a-asset-item id="sombrero" src="som.glb"> </a-asset-item>
        </a-assets>
        <a-entity id="mod" gltf-model = "sombrero" > </a-entity > 
        
    </a-scene>
</body>

</html>