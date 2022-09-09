@extends('layouts.app')

@section('template_title')
Product
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-xs-12 p-0 p-4 row">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
            @foreach ($products as $product)
            <div class="card text-center col-sm-3 col-xs-12 m-4 p-0 pb-4">
                <div class="card-body p-0" style="background-image: url('{{asset('img/cuadro.jpg')}}');background-size: cover;height: 229px;background-position: center"></div>
                <div>{{ $product->nombre }}</div>
                <div><b>$ {{ $product->precio }}</b></div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection