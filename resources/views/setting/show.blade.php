@extends('layouts.app')

@section('template_title')
    {{ $setting->name ?? 'Show Setting' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Setting</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('settings.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $setting->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $setting->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $setting->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Nit:</strong>
                            {{ $setting->nit }}
                        </div>
                        <div class="form-group">
                            <strong>Logo:</strong>
                            {{ $setting->logo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
