<%-- 
    Document   : galeria
    Created on : 28/03/2020, 14:24:23
    Author     : l2k49
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>galeria</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
 <!--ul.galeria>li*4>a>img-->   
 <ul class="galeria">
     <li><a href="#img1"><img src="img/canyon-4245261_1280.jpg" ><p>Un Link a alguna parte</p></a><p class="imagen__Titulo">TuImagen</p></p><br><p class="imagen__Descricion">Descripción Gran Vista</p></li>
     <li><a href="#img2"><img src="img/countryside-336686_1280.jpg" ><p>Un Link a alguna parte</p></a><p>Descripción Gran Vista</p></li>
     <li><a href="#img3"><img src="img/croatia-4754109_1280.jpg" ><p>Un Link a alguna parte</p></a><p>Descripción Gran Vista</p></li>
     <li><a href="#img4"><img src="img/dawn-190055_1280.jpg" ><p>Un Link a alguna parte</p></a><p>Descripción Gran Vista</p></li>
     <li><a href="#img5"><img src="img/etretat-4506073_1280.jpg" ><p>Un Link a alguna parte</p></a><p>Descripción Gran Vista</p></li>

        
            <div class="modal" id="img1">
        <h3>Paisaje 1</h3>
        <div class="imagen">
            <a href="#img6">&#60;</a>
            <a href="#img2"><img src="img/canyon-4245261_1280.jpg"></a>
            <a href="#img2">></a>
        </div>
        <a href="" class="cerrar">X</a>
    </div>

    <div class="modal" id="img2">
        <h3>Paisaje 2</h3>
        <div class="imagen">
            <a href="#img1">&#60;</a>
            <a href="#img3"><img src="img/countryside-336686_1280.jpg"></a>
            <a href="#img3">></a>
        </div>
        <a href="" class="cerrar">X</a>
    </div>

    <div class="modal" id="img3">
        <h3>Paisaje 3</h3>
        <div class="imagen">
            <a href="#img2">&#60;</a>
            <a href="#img4"><img src="img/croatia-4754109_1280.jpg"></a>
            <a href="#img4">></a>
        </div>
        <a href="" class="cerrar">X</a>
    </div>

    <div class="modal" id="img4">
        <h3>Paisaje 4</h3>
        <div class="imagen">
            <a href="#img3">&#60;</a>
            <a href="#img5"><img src="img/dawn-190055_1280.jpg"></a>
            <a href="#img5">></a>
        </div>
        <a href="" class="cerrar">X</a>
    </div>

    <div class="modal" id="img5">
        <h3>Paisaje 5</h3>
        <div class="imagen">
            <a href="#img4">&#60;</a>
            <a href="#img6"><img src="img/etretat-4506073_1280.jpg"></a>
            <a href="#img6">></a>
        </div>
        <a href="" class="cerrar">X</a>
    </div>

    <div class="modal" id="img6">
        <h3>Paisaje 6</h3>
        <div class="imagen">
            <a href="#img5">&#60;</a>
            <a href="#img1"><img src="img/fall-1072821_1280.jpg"></a>
            <a href="#img1">></a>
        </div>
        <a href="" class="cerrar">X</a>
    </div>
    </body>
</html>
