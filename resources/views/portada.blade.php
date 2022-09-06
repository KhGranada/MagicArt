<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@extends('layouts.app')

<body class="antialiased">
    <!--generamos el slide cabecera-->
    <div class="col-sm-12 col-xs-12 position-relative mt-5">
        <img class="slider col-sm-12" src="img/slide/slide1.jpg">
    </div>

    <!--generamos el cuerpo de articulos-->
    <!--productos recomendados-->
    <div class="col-sm-12 col-xs-12 min-vh-50 py-5 ">
        <div class="text-center">
            <h6>Conoce</h6>
            <h2>Nuestros</h2>
            <h1>Productos recomendados</h1>
        </div>

        <!--productos-->
        <div class="row col-sm-12 col-xs-12 p-4">
            <!--producto 1-->
            <div class="col-sm-3 col-xs-12 text-center p-4">
                <div class="border">
                    <img src="img/logo.jpg" class="img-responsive col-sm-12">
                </div>
                <p>Cuadro en lienzo</p>
                <div class="text-center col-sm-12">$25.000</div>
                <a href="#">
                    <button class="btn btn-primary">Ver producto</button>
                </a>
            </div>

            <!--producto 2-->
            <div class="col-sm-3 col-xs-12 text-center p-4">
                <div class="border">
                    <img src="img/logo.jpg" class="img-responsive col-sm-12">
                </div>
                <p>Cuadro en lienzo</p>
                <div class="text-center col-sm-12">$25.000</div>
                <a href="#">
                    <button class="btn btn-primary">Ver producto</button>
                </a>
            </div>

            <!--producto 3-->
            <div class="col-sm-3 col-xs-12 text-center p-4">
                <div class="border">
                    <img src="img/logo.jpg" class="img-responsive col-sm-12">
                </div>
                <p>Cuadro en lienzo</p>
                <div class="text-center col-sm-12">$25.000</div>
                <a href="#">
                    <button class="btn btn-primary">Ver producto</button>
                </a>
            </div>
            <div class="col-sm-3 col-xs-12 text-center p-4">
                <div class="border">
                    <img src="img/logo.jpg" class="img-responsive col-sm-12">
                </div>
                <p>Cuadro en lienzo</p>
                <div class="text-center col-sm-12">$25.000</div>
                <a href="#">
                    <button class="btn btn-primary">Ver producto</button>
                </a>
            </div>
        </div>
    </div>

    <!--generamos el pie de pagina-->
    @extends('layouts.footer')
</body>

</html>