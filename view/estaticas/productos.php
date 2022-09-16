<!DOCTYPE html>
<html lang="es">
<?php require_once HEADER; ?>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Puedes ver todos nuestros productos en nuestra web ">
    <meta name="keywords" content="Mycake, pasteles, bocadillos,Pedidos,Productos,">
    <title>Mycake</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Roboto:wght@300&display=swap" rel="stylesheet">

    
    <style>
        .parallax {
            width: 100%;
            height: 90vh;
            background-image: url(assets/img/cake11.jpg);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #pasteles {
            width: 100%;
            height: 55vh;
            background-image: url(assets/img/pasteles.jpg);
            background-position: 40% 50%;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #bocaditos {
            width: 100%;
            height: 55vh;
            background-image: url(assets/img/color-g.jpg);
            background-position: 0% 50%;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #bebidas {
            width: 100%;
            height: 55vh;
            background-image: url(assets/img/coffeeStyle.jpg);
            background-position: left;
            background-size: 80%;
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #pedidos {
            width: 100%;
            height: 55vh;
            background-image: url(assets/img/pedidoimg.png);
            background-position: 40% 50%;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .fondoimge {
            opacity: 0.8;
            filter: alpha(opacity=20);
            /* For IE8 and earlier */
        }

        .divGrip {
            width: 100%;
            height: 90vh;
            background-color: rgb(40, 39, 39);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: grid;
            grid-template-rows: 100px 150px 90px 150px 100px;
            /*altura de las filas*/
            grid-template-columns: 5% 15% 20% 20% 20% 10%;
            /* ancho de las columnas*/
            grid-gap: 15px 20px;
            /* distancia row column*/
        }

        .divGripS {
            width: 100px;
            height: 55vh;
            border: 3px solid red;
            display: grid;
            grid-template-rows: 10px 30px;
            /*altura de las filas*/
            grid-template-columns: 5% 50% 1%;
            /* ancho de las columnas*/
            grid-gap: 15px 20px;
            /* distancia row column*/
        }

        #divBanner1 {
            visibility: visible;
            width: 100%;
            /*background-color: rgb(18, 13, 13);*/
            display: grid;
            grid-template-rows: 120px 130px 50px 50px;
            /*altura de las filas*/
            grid-template-columns: 10% 80% 5%;
            /* ancho de las columnas*/
            grid-gap: 15px 20px;
            /* distancia row column*/
        }


        #divBanner2 {
            visibility: hidden;
            width: 100%;
            /*background-color: rgb(18, 13, 13);*/
            display: grid;
            grid-template-rows: 160px 90px 40px;
            /*altura de las filas*/
            grid-template-columns: 10% 80% 5%;
            /* ancho de las columnas*/
            grid-gap: 15px 20px;
            /* distancia row column*/
        }


        .elemento {
            padding: 10px;
            min-width: 105px;
            margin-left: 5px;
            margin-top: 5px;
            justify-content: center;
            align-items: center;
        }

        .elemento:nth-child(1) {
            /* titulo banner 1*/
            grid-row: 1/3;
            grid-column: 1/4;
            margin-top: 8px;
            margin-bottom: 2px;
            padding-top: 16px;
        }

        .elemento:nth-child(2) {
            /* boton banner 1*/
            grid-row: 4;
            grid-column: 2/3;
            padding: 25px 50px 5px 60px;
        }

        .elemento:nth-child(3) {
            /*parrafo banner 1*/
            grid-row: 3;
            grid-column: 3/4;
            padding: 7px 5px 0px 6px;
        }

        .elemento:nth-child(4) {
            /* titulo banner 2 */
            grid-row: 1;
            grid-column: 1;
        }

        .elemento:nth-child(5) {
            /*boton banner 2*/
            grid-row: 2;
            grid-column: 1/3;
        }

        /*boton banner 1*/
        .boton {
            color: rgb(248, 248, 248);
            text-decoration: none;
            background: #fb0000;
            border-radius: 30px;
            font-size: 20px;
            padding: 19px 25px;
            position: relative;
        }

        /*boton banner 2*/
        a[id="BotonpedidoS"] {
            color: rgb(0, 0, 0);
            text-decoration: none;
            background: #ffd000;
            border-radius: 30px;
            font-size: 20px;
            padding: 19px 25px;
            position: relative;
        }

        /* boton pedido especial */
        a[id="BotonpedidoS2"] {
            color: rgb(255, 255, 255);
            text-decoration: none;
            background: #fe2a2a;
            border-radius: 30px;
            font-size: 20px;
            padding: 19px 25px;
            position: relative;
        }

        .boton:hover {
            color: rgb(17, 17, 17);
            background-color: rgb(228, 228, 228);
        }

        /* tarjetas de menu de productos*/
        .card {
            background-color: white;
            border-radius: 32px;
            border: 2px solid rgb(92, 92, 92);
            padding: 30px 25px 30px 25px;
            height: 200px;
            width: 120px;
            display: inline-block;
            margin-right: 10px;
            margin-top: 10px;
        }

        .card:hover {
            border-color: rgb(215, 119, 1);
        }

        p::first-letter {
            font-family: 'Dancing Script';
            font-size: 28px;
        }

        .Producto {
            background-color: white;
            border-radius: 32px;
            border: 2px solid #8e5718;
            padding: 20px 15px 20px 15px;
            height: 420px;
            width: 250px;
            /*background-color: rgb(18, 13, 13);*/
            display: inline-block;
            margin-right: 20px;
            margin-left: 15px;
            margin-bottom: 12px;
        }


        /* boton de comprar */
        a[class="botonComprar"] {
            grid-row: 5;
            grid-column: 2/5;
            display: inline-block;
            text-align: center;
            width: 85px;
            margin-left: 28px;
        }

        .txtprecio {
            grid-row: 4;
            grid-column: 3/4;
            display: inline-block;
            margin-right: 35px;
            font-size: 20px;
            color: #764a17;
            font-family: "Dancing Script";
        }

        .txtcard {
            grid-row: 1;
            grid-column: 2/5;
            display: block;
            width: 200px;
            font-size: 25px;
            color: #8e5718;
            font-family: "Dancing Script";
        }

        .imgcard {
            grid-row: 2/3;
            grid-column: 2/5;
            width: 170px;
            height: 160px;
            display: block;
            text-align: center;

        }

        .divCard {
            display: grid;
            height: 420px;
            width: 250px;
            display: grip;
            grid-template-rows: 70px 160px 20px 60px;
            /*altura de las filas*/
            grid-template-columns: 5% 20% 25% 10% 5%;
            /* ancho de las columnas*/
            grid-gap: 15px 20px;
            /* distancia row column*/
            /*padding: 10px 20px 10px 20px;*/
        }


        .botonComprar {
            color: #c38b4a;
            text-decoration: none;
            background: #ffffff;
            border: 2px solid #AB5300;
            border-radius: 30px;
            font-size: 20px;
            display: inline-block;
            height: 25px;
            padding: 5px 15px;
            position: relative;

        }

        .botonComprar:hover {
            color: white;
            background-color: #AB5300;
        }

        .botonbuscar {
            color: #ffffff;
            text-decoration: none;
            background: #AB5300;
            border: 1px solid #000000;
            border-radius: 22px;
            font-size: 20px;
            padding: 10px 22px;
            position: absolute;
        }

        .botonbuscar:hover {
            background-color: #000000;
        }

        .pnormal {
            margin: 2px;
            text-align: center;
            line-height: 1.5;
            word-wrap: break-word;
        }

        .buscar {
            position: relative;
            padding: 20px;
            margin-left: 170px;
            display: inline-block;
        }

        .buscar input {
            width: 240px;
            height: 40px;
            font-size: 18px;
            color: black;
            outline: none;
            border: 3px solid #000000;
            border-radius: 28px;
            margin: 5px;
            padding: 5px;
        }

        .containerflex {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }


        .div1 {
            grid-column: 3 / 6;
            grid-row: 2/5;
        }

        .div2 {
            grid-column: 4 / 7;
            grid-row: 2/5;
        }

        #shopbutton {
            position: fixed;
            width: 80px;
            height: 80px;
            border-radius: 50px;
            background-color: rgb(254, 229, 64);
            bottom: 10px;
            right: 20px;
            background-image: url(assets/img/shop.png);
            background-position: center;
            background-repeat: no-repeat;
            background-size: 45%;
            /*padding: 0px 6px 6px 2px;*/
            box-shadow: 0px 1px 10px rgba(54, 53, 53, 0.622);
            display: grid;
            grid-template-rows: 10px 10px;
            /*altura de las filas*/
            grid-template-columns: 30% 10%;
            /* ancho de las columnas*/
            grid-gap: 10px 10px;
        }


        .contador {
            grid-column: 3/3;
            grid-row: 1;
            border-radius: 40px;
            width: 25px;
            height: 25px;
            background-color: #fe6464;
            color: rgb(255, 255, 255);
            text-align: center;
            font-size: medium
        }


        section[id^="Pe"] {

            display: grid;
            grid-template-rows: 160px 90px 100px;
            /*altura de las filas*/
            grid-template-columns: 5% 15% 20% 20% 20% 10%;
            /* ancho de las columnas*/
            grid-gap: 15px 20px;

        }

        #secElement1 {
            grid-column: 3 / 6;
            grid-row: 1/2;
        }

        #secElement2 {
            grid-column: 4/5;
            grid-row: 3;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 240px;
            height: 50px;
            padding-top: 10px;

        }


        #bebidaGrip {
            display: grid;
            grid-template-rows: 160px 150px 100px;
            /*altura de las filas*/
            grid-template-columns: 5% 15% 20% 20% 20% 10%;
            /* ancho de las columnas*/
            grid-gap: 15px 20px;
        }

        #bocaditoGrip {
            display: grid;
            grid-template-rows: 90px 190px 100px;
            /*altura de las filas*/
            grid-template-columns: 5% 15% 20% 20% 20% 10%;
            /* ancho de las columnas*/
            grid-gap: 15px 20px;
        }

        #TortaGrip {
            display: grid;
            grid-template-rows: 90px 190px 10px;
            /*altura de las filas*/
            grid-template-columns: 5% 15% 20% 20% 20% 10%;
            /* ancho de las columnas*/
            grid-gap: 15px 20px;
        }

        #pedidoGrip {
            display: grid;
            grid-template-rows: 50px 120px 40px 30px;
            /*altura de las filas*/
            grid-template-columns: 5% 15% 20% 20% 20% 40% 50% 20%;
            /* ancho de las columnas*/
            grid-gap: 15px 20px;
        }
    </style>






    <main id="inicio">

        <section class="parallax " style="background-color: rgba(0, 0, 0, 0.887);">

            <div class="divGrip fondoimge ">
                <!-- Div Grande   -->

                <!-- Div con Elementos  -->
                <div id="divBanner1" class="div1">

                    <div class="elemento" style="height: 220px;">
                        <h1 style="color: white; margin-top:12px ; margin-bottom:12px ;">No puedes comprar la felicidad, pero sí nuestras tortas.</h1>
                        <p style="color: white">Las mejores tortas y bocaditos en un solo lugar </p>
                    </div>

                    <div class="elemento" style="height: 50px; margin: auto;">
                        <a class="boton" href="#s2"> Descubre más </a>
                    </div>
                </div>

                <!-- Div con promocion  -->
                <div id="divBanner2" class="div2">

                    <div class="elemento" style="height: 220px;">
                        <h1 style="color: white;margin-top:12px ;">Sabor, color, arte, alegría, amor…</h1>
                        <p style="color: white">Lo que busques de una torta para tí lo hornearemos </p>
                    </div>

                    <div class="elemento" style="height: 50px; margin: auto;">
                        <a id="BotonpedidoS" href="index.php?c=index&f=index&p=pedidosproductos">Pedido especial</a>
                    </div>
                </div>

            </div>

            <br><br>
            <br><br>
        </section>
        <section id="s2" style="align-content: center;">

            <h2>Nuestros Productos </h2>

            <div style="margin: auto; display: flex ; justify-content: center; align-items: center; height: 100px;">
                <div style="display:inline-block; height: 90px; padding-right: 20px;padding-top: 10px; width: 450px;">
                    <div class="buscar"><input type="text" placeholder=" buscar producto " required> </div>
                </div>
                <div style="display:inline-block; height: 50px; width: 300px; margin: 40px 5px 10px 5px;">
                    <a class="botonbuscar" href="#">Buscar</a>
                </div>
            </div>

            <hr style="width: 45%;">

            <div style="display:flex; justify-content:center;  width: 60% ;height:280px; margin: auto ; ">

                <a href="#pasteles">
                    <div class="card">
                        <img src="assets/img/icoCake2.png" alt="icono_cake" />
                        <h3 class="font1" style="color: rgb(0, 0, 0);font-style: italic ; font-size:  21px; padding: 2px;">Pasteles</h3>
                    </div>
                </a>

                <a href="#bocaditos">
                    <div class="card">
                        <img src="assets/img/icobocadito.png" alt="icono_bocadito" />
                        <h3 class="font1" style="color: rgb(0, 0, 0);font-style: italic ; font-size:  21px; padding: 2px;">Bocaditos</h3>
                    </div>
                </a>

                <a href="#bebidas">
                    <div class="card">
                        <img src="assets/img/icoBebida.png" alt="icono_bebida" />
                        <h3 class="font1" style="color: rgb(0, 0, 0);font-style: italic ; font-size:  21px; padding: 2px;">Bebidas</h3>
                    </div>
                </a>

            </div>
            <br><br><br><br><br>

        </section>

        <!-- Banner Pasteles -->
        <section id="pasteles">
            <div class="containerflex" style=" width: 100%; height: 55vh;">
                <div id="TortaGrip" style="background-color: rgb(175, 96, 0); height:55vh ;width:660px;">
                    <h1 style="grid-column: 4/6; grid-row: 1; color: rgb(255, 255, 255);  margin-top: 40px;margin-bottom: 18px;">Un pastel para cada ocacion</h1>
                    <p class="pnormal" style="margin-bottom: 10px; grid-column: 2/4; grid-row: 2; color:rgb(255, 255, 255) ;word-wrap: break-word;">Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit. Pellentesque est velit,
                        accumsan fermentum mollis eu, cursus quis ligula </p>
                </div>
            </div>

        </section>

        <!-- Productos Pasteles -->
        <section id="temporada" style="background-color :rgb(255, 255, 255);">
            <h2>Pasteles pequeños, medianos o grandes. </h2>

            <div class="shadown" style="width: 90%; height:160vh ; margin: auto;  display: flex ; justify-content: center; align-items: center;">
                <div style="width: 70%;height:150vh ;padding: 10px 50px 10px 60px;">

                    <div class="Producto">
                        <div class="divCard">
                            <img class="assets/imgcard" src="assets/img/t1.png" alt="icono_cake1" />
                            <h3 class="txtcard">Petite Inglesa Clasica</h3>
                            <h3 class="txtprecio">25$</h3>
                            <br>
                            <a class="botonComprar" href="#temporada">Comprar</a>
                        </div>
                    </div>

                    <div class="Producto">
                        <div class="divCard">
                            <img class="assets/imgcard" src="assets/img/t2.png" alt="icono_cake2" />
                            <h3 class="txtcard">Petite Inglesa Clasica</h3>
                            <h3 class="txtprecio" style="font-size: 23px; color:#764a17;" class="font1">25$</h3>
                            <br>
                            <a class="botonComprar" href="#temporada">Comprar</a>
                        </div>
                    </div>

                    <div class="Producto">
                        <div class="divCard">
                            <img class="assets/imgcard" src="assets/img/t3.png" alt="icono_cake3" />
                            <h3 class="txtcard">Petite Inglesa Clasica</h3>
                            <h3 class="txtprecio" style="font-size: 23px; color:#764a17;" class="font1">40$</h3>
                            <br>
                            <a class="botonComprar" href="#temporada">Comprar</a>
                        </div>
                    </div>

                    <div class="Producto">
                        <div class="divCard">
                            <img class="assets/imgcard" src="assets/img/t4.png" alt="icono_cake4" />
                            <h3 class="txtcard">Petite Inglesa Clasica</h3>
                            <h3 class="txtprecio" style="font-size: 23px; color:#764a17;" class="font1">25$</h3>
                            <br>
                            <a class="botonComprar" href="#temporada">Comprar</a>
                        </div>
                    </div>

                    <div class="Producto">
                        <div class="divCard">
                            <img class="assets/imgcard" src="assets/img/t5.png" alt="icono_cake5" />
                            <h3 class="txtcard">Petite Inglesa Clasica</h3>
                            <h3 class="txtprecio" style="font-size: 23px; color:#764a17;" class="font1">35$</h3>
                            <br>
                            <a class="botonComprar" href="#temporada">Comprar</a>
                        </div>

                    </div>

                    <div class="Producto">
                        <div class="divCard">
                            <img class="assets/imgcard" src="assets/img/t6.png" alt="icono_cake6" />
                            <h3 class="txtcard">Petite Inglesa Clasica</h3>
                            <h3 class="txtprecio" style="font-size: 23px; color:#764a17;" class="font1">20$</h3>
                            <br>
                            <a class="botonComprar" href="#temporada">Comprar</a>
                        </div>

                    </div>

                </div>
            </div>
            <br><br><br><br><br>
        </section>


        <div id="shopbutton">
        </div>
        <!-- Banner bocaditos -->
        <section id="bocaditos">

            <div class="containerflex" style=" width: 100%; height: 55vh;">
                <div id="bocaditoGrip" style="background-color: rgb(250, 210, 171); height:55vh ;width:660px;margin-left:auto; padding-top: 30px;">
                    <h1 style="grid-column: 2/4; grid-row: 1/3; color: rgb(0, 0, 0); margin-top: 60px; margin-bottom: 10px;">Hay de dulce y de sal</h1>
                    <p class="pnormal" style="grid-column: 4/6; grid-row: 2/3;  color:rgb(0, 0, 0) ;word-wrap: break-word;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Pellentesque est velit,
                        accumsan fermentum mollis eu, cursus quis ligulaconsectetur adipiscing elit. Pellentesque est velit, accumsan fermentum mollis eu, cursus quis ligula
                    </p>
                </div>
            </div>

        </section>

        <!-- Productos bocaditos  -->
        <section id="bocaditos-ref" style="background-color :rgb(255, 255, 255);">
            <h2>Bocaditos Por unidad o por Mayor </h2>

            <div class="shadown" style="width: 80%; margin: auto;  display: flex ; justify-content: center; align-items: center;">
                <div style="width: 70%; padding: 10px 50px 10px 60px;">

                    <div class="Producto">
                        <div class="divCard">
                            <img class="assets/imgcard" src="assets/img/boca1.png" alt="icono_bocadito1" />
                            <h3 class="txtcard">Alfajores de manjar</h3>
                            <h3 class="txtprecio">25$</h3>
                            <a class="botonComprar" href="#bocaditos-re">Comprar</a>
                        </div>
                    </div>

                    <div class="Producto">
                        <div class="divCard">
                            <img class="assets/imgcard" src="assets/img/boca2.png" alt="icono_bocadito2" />
                            <h3 class="txtcard">Bocadito de queso</h3>
                            <h3 class="txtprecio">25$</h3>
                            <a class="botonComprar" href="#bocaditos-re">Comprar</a>
                        </div>
                    </div>

                    <div class="Producto">
                        <div class="divCard">
                            <img class="assets/imgcard" src="assets/img/boca3.jpeg" alt="icono_bocadito3" />
                            <h3 class="txtcard">Choripan</h3>
                            <h3 class="txtprecio">25$</h3>
                            <a class="botonComprar" href="#bocaditos-re">Comprar</a>
                        </div>
                    </div>

                    <div class="Producto">
                        <div class="divCard">
                            <img class="assets/imgcard" src="assets/img/boca4.jpeg" alt="icono_bocadito4" />
                            <h3 class="txtcard">Frutas de mazapan</h3>
                            <h3 class="txtprecio">25$</h3>
                            <a class="botonComprar" href="#bocaditos-re">Comprar</a>
                        </div>
                    </div>

                    <div class="Producto">
                        <div class="divCard">
                            <img class="assets/imgcard" src="assets/img/boca5.jpeg" alt="icono_bocadito5" />
                            <h3 class="txtcard">Bocadito de hojaldre</h3>
                            <h3 class="txtprecio">25$</h3>
                            <a class="botonComprar" href="#bocaditos-re">Comprar</a>
                        </div>
                    </div>

                    <div class="Producto">
                        <div class="divCard">
                            <img class="assets/imgcard" src="assets/img/boca6.webp" alt="icono_bocadito6" />
                            <h3 class="txtcard">Conitos de Manjar</h3>
                            <h3 class="txtprecio">25$</h3>
                            <a class="botonComprar" href="#bocaditos-re">Comprar</a>
                        </div>
                    </div>

                </div>
            </div>
            <br><br><br><br><br> <br><br><br><br><br> <br><br><br><br><br> <br><br><br><br><br>
        </section>


        <section id="pedidos">
            <div class="containerflex" style=" width: 100%; height: 55vh;">
                <div id="pedidoGrip" style="background-color: rgb(2, 2, 3); height:55vh ;width:560px;">
                    <h1 style="grid-column: 2/6; grid-row: 1; color: rgb(255, 255, 255);  margin-top: 40px;margin-bottom: 18px;">No encuentras lo que buscas?</h1>
                    <p class="pnormal" style="margin-bottom: 10px; grid-column: 2/6; grid-row: 3; color:rgb(255, 255, 255) ;word-wrap: break-word;">Sabor, color, arte, alegría,
                        amor… <br>Lo que busques de una torta para tí lo hornearemos</p>

                    <div id="secElement2" style="grid-column: 3; grid-row: 5;">
                        <a id="BotonpedidoS2" href="index.php?c=index&f=index&p=pedidosproductos">Haz tu pedido Ya!</a>
                    </div>
                </div>
            </div>
        </section>

        <div style="width: 100%; height: 30vh; background-color:white  "></div>

        <section id="bebidas">
            <br><br><br><br><br>
            <div class="containerflex" style=" width: 100%; height: 55vh;">
                <div id="bebidaGrip" style="background-color: rgb(244, 186, 98); height:55vh ;width:680px;margin-left:auto;">

                    <h1 style="grid-column: 4/6; grid-row: 1/2;   color: rgb(0, 0, 0);  margin-top: 60px;margin-bottom: 18px;">Bebidas</h1>
                    <p class="pnormal" style="grid-column: 3/6; grid-row: 2/4; color:rgb(0, 0, 0) ;word-wrap: break-word; padding: 10px;">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Pellentesque est velit,
                        accumsan fermentum mollis eu, cursus quis ligulaconsectetur adipiscing elit. Pellentesque est velit, accumsan fermentum mollis eu, cursus quis ligula
                    </p>

                </div>
            </div>
        </section>

        <section id="b" style="background-color :rgb(255, 255, 255);">
            <h2>Bebidas Calientes y frias </h2>
            <div class="shadown" style="width: 70%; margin: auto; display: flex ; justify-content: center; align-items: center;">
                <div style="width: 80%;  padding: 10px 50px 10px 60px;">


                    <div class="Producto">
                        <div class="divCard">
                            <img class="assets/imgcard" src="assets/img/b1.png" alt="icono_bebida1" />
                            <h3 class="txtcard">Café con leche </h3>
                            <h3 class="txtprecio">5$</h3>
                            <a class="botonComprar" href="#b">Comprar</a>
                        </div>
                    </div>

                    <div class="Producto">
                        <div class="divCard">
                            <img class="assets/imgcard" src="assets/img/b2.png" alt="icono_bebida2" />
                            <h3 class="txtcard">Milkshake de fresa</h3>
                            <h3 class="txtprecio">8$</h3>
                            <a class="botonComprar" href="#b">Comprar</a>
                        </div>
                    </div>

                    <div class="Producto">
                        <div class="divCard">
                            <img class="assets/imgcard" src="assets/img/b6.jpeg" alt="icono_bebida1" />
                            <h3 class="txtcard">Café Irlandés </h3>
                            <h3 class="txtprecio">10$</h3>
                            <a class="botonComprar" href="#b">Comprar</a>
                        </div>
                    </div>

                </div>
            </div>
            <br><br><br><br><br>
        </section>

    </main>

   

    <script>
        var c1 = document.getElementById("divBanner1");
        var c2 = document.getElementById("divBanner2");
        var sec1 = document.querySelector(".parallax")


        setInterval(() => {
            c1.style.visibility = "hidden";
            c2.style.visibility = "visible";
            sec1.style.backgroundImage = "url(assets/img/banner2.png)";
        }, 4000);

        setInterval(() => {
            c2.style.visibility = "hidden";
            c1.style.visibility = "visible";
            sec1.style.backgroundImage = "url(assets/img/cake11.jpg)";
        }, 6000);


        var carrito = document.getElementById("shopbutton");
        var span = document.createElement("span");
        var div = document.createElement("div");
        var inicio = document.getElementById("inicio");
        div.style.height = "500px";
        div.style.width = "900px";
        div.style.backgroundColor = "black";
        div.style.position = "fixed";
        span.className = "contador";
        var c = 0;
        document.addEventListener("click", function (e) {
            if (e.target.className == "botonComprar") {
                console.log("boton press");
                c = c + 1;
                if (c <= 10) {
                    span.textContent = c;
                }
                carrito.appendChild(span);
            }
        });
    </script>


<?php require_once FOOTER; ?>
</body>

</html>