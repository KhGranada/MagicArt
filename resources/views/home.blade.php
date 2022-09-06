@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

        <!-- Interface user client-->
        @if (Auth::user()->rol !=1)
            <div class="card">
                <div class="card-header">Bienvenido <b>{{ Auth::user()->name }}</b></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                                       
                    <div class="col-sm-8 col-xs-12">
                        <h4>Mis compras</h4>
                        <div class="">
                            <b>N° de compra</b>

                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <h4>Mis pedidos pendientes</h4>
                        <div class=""></div>
                    </div>
                </div>
            </div>
            @endif 
            <!-- End interface user client-->

        <!--Interface administrator-->
        @if (Auth::user()->rol ==1)
        <b class="text-right pull-right">Usted es un usuario Administrador</b>
            <div class="card">
                <div class="card-header">Bienvenido <b>{{ Auth::user()->name }}</b></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="col-sm-8 col-xs-12">
                        <h4>Ventas</h4>
                        <div class="">
                            <b>N° de compra</b>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <h4>Mis pedidos pendientes</h4>
                        <div class=""></div>
                    </div>
                </div>
            </div>
            @endif 
            <!--End interface administrator-->
        </div>
    </div>
</div>
@endsection
