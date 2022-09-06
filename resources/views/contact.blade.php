@extends('layouts.app')

<body>
    <div class="container pt-5 mt-5">
    <div class="col-sm-12 col-xs-12 row"> 
    <div class="col-sm-6 col-xs-12">
        <!-- Success message -->
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
        <form action="" method="post" action="{{ route('contact.store') }}" class="mt-2">
            <!-- CROSS Site Request Forgery Protection -->
            @csrf
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="form-group">
                <label>Correo electrónico</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>
            <div class="form-group">
                <label>Teléfono</label>
                <input type="text" class="form-control" name="phone" id="phone">
            </div>
            <div class="form-group">
                <label>Motivo</label>
                <input type="text" class="form-control" name="subject" id="subject">
            </div>
            <div class="form-group">
                <label>Describa brevemente el motivo de la consulta</label>
                <textarea class="form-control" name="message" id="message" rows="4"></textarea>
            </div>
            <input type="submit" name="send" value="Enviar" class="btn btn-dark btn-block">
        </form>
    </div>
    <div class="col-sm-6 col-xs-12 pt-5">
        <h2>Hablemos</h2>
        <p>Bienvenido al centro de ayuda de Magic Art - indique el motivo de su consulta y sus datos personales para responder a su solicitud</p>
        <p>Calle 26 sur # 48 -158 <br> info@magicart.com <br> + 57 3315522 </p>
    </div>
    </div>
    </div>
    @extends('layouts.footer')
