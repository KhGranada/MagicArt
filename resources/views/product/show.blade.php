@extends('layouts.app')

@section('template_title')
    {{ $product->name ?? 'Show Product' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Product</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $product->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Image:</strong>
                            {{ $product->image }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $product->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Stock:</strong>
                            {{ $product->stock }}
                        </div>
                        <div class="form-group">
                            <strong>Color:</strong>
                            {{ $product->color }}
                        </div>
                        <div class="form-group">
                            <strong>Material:</strong>
                            {{ $product->material }}
                        </div>
                        <div class="form-group">
                            <strong>Estilo:</strong>
                            {{ $product->estilo }}
                        </div>
                        <div class="form-group">
                            <strong>Medidas:</strong>
                            {{ $product->medidas }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
